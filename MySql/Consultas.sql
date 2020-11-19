drop table dbphp7.Usuarios;

SELECT * FROM Usuarios where Login = 'MATHEUSCASTRO161096@gmail.com' and Senha = '123';

INSERT INTO Usuarios 
                (Login, Senha, Nome, Sobrenome, DataNascimento, Escolaridade, Profissao) 
                    VALUES ('MATHEUSCASTRO161096@gmail.com', '123', 'teste',  'te', CURRENT_DATE(), 'medio', 'dev');