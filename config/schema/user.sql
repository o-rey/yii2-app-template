DROP TABLE IF EXISTS user;
CREATE TABLE user (
    id                     INT AUTO_INCREMENT NOT NULL,
    created_at             INT          NULL,
    updated_at             INT          NULL,
    is_disabled            BOOLEAN      NOT NULL DEFAULT 0,

    name                   VARCHAR(255) NOT NULL,

    email                  VARCHAR(255) NULL,
    username               VARCHAR(255) NOT NULL,
    password_hash          VARCHAR(255) NOT NULL,
    auth_key               CHAR(32)     NOT NULL,
    password_reset_token   CHAR(32),

    role                   ENUM('user', 'admin', 'godmode') DEFAULT 'user',

    PRIMARY KEY (id)

) DEFAULT CHARSET=utf8;

CREATE INDEX user_idx_1 ON user(created_at);
CREATE INDEX user_idx_2 ON user(updated_at);
CREATE INDEX user_idx_5 ON user(email, is_disabled);
