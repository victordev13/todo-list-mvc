-- Tabela para os itens
CREATE TABLE tarefas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    completed BOOLEAN DEFAULT FALSE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Inserir dados de exemplo
INSERT INTO tarefas (title, description, completed) VALUES 
('Comprar leite', 'Leite desnatado 1L', FALSE),
('Comprar pão', 'Pão francês', TRUE),
('Comprar frutas', 'Maçã e banana', FALSE),
('Revisar código', 'Fazer code review do PR #123', FALSE),
('Atualizar documentação', 'Documentar novas funcionalidades', FALSE),
('Reunião com cliente', 'Apresentar progresso do projeto', TRUE),
('Exercitar-se', 'Fazer 30 minutos de caminhada', FALSE),
('Ler livro', 'Continuar lendo "Clean Code"', FALSE);
