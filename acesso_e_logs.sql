SET GLOBAL time_zone = '-03:00';
SET time_zone = '-03:00';
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;

CREATE DATABASE IF NOT EXISTS `manicure_appointments`;
USE `manicure_appointments`;

-- Tabela Companies - Empresas
CREATE TABLE companies (
    `id_company` INT AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,  -- Nome da empresa
    `created_at` DATETIME DEFAULT CURRENT_TIMESTAMP,  -- Data de criação
    `updated_at` TIMESTAMP  -- Data da última atualização
);

INSERT INTO companies (id_company, name) VALUES (1, 'Desenvolvedor');

-- Tabela User_Types - Tipos de Usuário
CREATE TABLE user_types (
    id_user_type INT AUTO_INCREMENT PRIMARY KEY,
    type ENUM('Desenvolvedor', 'Administrador', 'Cliente') NOT NULL UNIQUE  -- Tipo de usuário
);

INSERT INTO user_types (type) VALUES
('Desenvolvedor'),
('Administrador'),
('Cliente');

-- Tabela Profiles - Perfis
CREATE TABLE profiles (
    `id_profile` INT AUTO_INCREMENT PRIMARY KEY,
    `active` TINYINT(1) NOT NULL DEFAULT 1,  -- Indica se o perfil está ativo
    `page` VARCHAR(100) NOT NULL,  -- Página associada ao perfil
    `user_type_id` INT,  -- ID do tipo de usuário associado ao perfil
    `created_at` DATETIME DEFAULT CURRENT_TIMESTAMP,  -- Data de criação
    `updated_at` TIMESTAMP,  -- Data da última atualização
    FOREIGN KEY (user_type_id) REFERENCES user_types(id_user_type)  -- Chave estrangeira para a tabela de tipos de usuário
);

INSERT INTO `profiles` (`id_profile`, `active`, `page`, `user_type_id`) VALUES
(1, 1, '../dashboard/dev.php', 1),
(2, 1, '../dashboard/adm.php', 2),
(3, 1, '../dashboard/', 3);

-- Tabela Users - Usuários
CREATE TABLE users (
    `id_user` INT AUTO_INCREMENT PRIMARY KEY,
    `photo` VARCHAR(200),  -- URL da foto do usuário
    `name` VARCHAR(255) NOT NULL,  -- Nome do usuário
    `phone` VARCHAR(15) UNIQUE,  -- Telefone único do usuário
    `email` VARCHAR(255) UNIQUE NOT NULL,  -- Email único do usuário
    `password` VARCHAR(255) NOT NULL,  -- Senha do usuário (armazenada de forma segura)
    `password_recovery` VARCHAR(256),  -- Token de recuperação de senha
    `email_verified` BOOLEAN DEFAULT FALSE,  -- Indica se o email foi verificado
    `phone_verified` BOOLEAN DEFAULT FALSE,  -- Indica se o telefone foi verificado
    `deleted_at` DATETIME DEFAULT NULL,  -- Timestamp de deleção lógica
    `profile_id` INT,  -- ID do perfil associado ao usuário
    `company_id` INT,  -- ID da empresa associada ao usuário
    `user_type_id` INT,  -- ID do tipo de usuário
    `created_by` INT DEFAULT 0,  -- ID do usuário que criou o registro (0 para cadastro realizado pelo cliente)
    `created_at` DATETIME DEFAULT CURRENT_TIMESTAMP,  -- Data de criação
    `updated_at` TIMESTAMP,  -- Data da última atualização
    FOREIGN KEY (profile_id) REFERENCES profiles(id_profile),  -- Chave estrangeira para a tabela de perfis
    FOREIGN KEY (company_id) REFERENCES companies(id_company),  -- Chave estrangeira para a tabela de empresas
    FOREIGN KEY (user_type_id) REFERENCES user_types(id_user_type)  -- Chave estrangeira para a tabela de tipos de usuário
);

INSERT INTO users (photo, name, phone, email, password, password_recovery, email_verified, phone_verified, profile_id, created_by, company_id, user_type_id, created_at) VALUES
(NULL, 'Wagner Desenvolvedor', '5511982470496', 'wsawebmaster@yahoo.com.br', '$2y$10$TyF86Q.wxGHMtyyeYddci.kUsaeCJFs0/BOOgG4Rq1.0miDbuvTXq', NULL, FALSE, FALSE, 1, 0, 1, 1, '2025-01-30 20:32:17'),
(NULL, 'Esther Silva', '5516996463836', 'es.esthersilva99@gmail.com', '$2y$10$LdgLonNm29Vd/pJctXqnEOfOnD7/T.kiQLBBQ2ddnb2Z5AdtEx4oy', NULL, FALSE, FALSE, 2, 0, 1, 2, '2025-01-30 20:32:51'),
(NULL, 'Cliente Esther', '5516999999999', 'cliente@gmail.com', '$2y$10$LdgLonNm29Vd/pJctXqnEOfOnD7/T.kiQLBBQ2ddnb2Z5AdtEx4oy', NULL, FALSE, FALSE, 3, 0, 1, 3, '2025-01-30 20:32:51');

CREATE INDEX idx_email ON users(email);  -- Índice para busca rápida por email
CREATE INDEX idx_phone ON users(phone);  -- Índice para busca rápida por telefone
CREATE INDEX idx_profile ON users(profile_id);  -- Índice para busca rápida por profile_id
CREATE INDEX idx_company ON users(company_id);  -- Índice para busca rápida por company_id
CREATE INDEX idx_user_type ON users(user_type_id);  -- Índice para busca rápida por user_type_id

-- Tabela Activity_Logs - Logs de Atividades
CREATE TABLE activity_logs (
    `id_log` INT AUTO_INCREMENT PRIMARY KEY,
    `user_id` INT,  -- ID do usuário que realizou a ação
    `action_type` VARCHAR(100),  -- Tipo da ação (ex: "login", "update", etc.)
    `login` VARCHAR(100),  -- Login informado
    `action` VARCHAR(255),  -- Descrição da ação realizada
    `details` TEXT,  -- Sucesso ou Falha
    `password_incorrect` VARCHAR(255),  -- Senha incorreta digitada
    `ip_address` VARCHAR(45),  -- Endereço IP do login (para IPv6)
    `timestamp` TIMESTAMP DEFAULT CURRENT_TIMESTAMP  -- Timestamp da ação
);

CREATE INDEX idx_log_user ON activity_logs(user_id);  -- Índice para busca rápida por user_id

COMMIT;  -- Finaliza a transação