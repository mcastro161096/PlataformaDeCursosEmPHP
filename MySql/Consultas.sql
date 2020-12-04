drop table dbphp7.Usuarios;
drop table usuariocurso;
drop table Curso;

SELECT * FROM Usuarios where Login = 'MATHEUSCASTRO161096@gmail.com' and Senha = '123';
SELECT * FROM Usuarios;

SELECT * FROM dbphp7.Curso;
DELETE FROM dbphp7.Curso WHERE Id = 2;

INSERT INTO Usuarios 
                (Login, Senha, Nome, Sobrenome, DataNascimento, Escolaridade, Profissao) 
                    VALUES ('MATHEUSCASTRO161096@gmail.com', '123', 'teste',  'te', CURRENT_DATE(), 'medio', 'dev');
                    
INSERT INTO CURSO(NOME, DURACAO, LINK)
VALUES ('Listas OL e UL - @Curso em Vídeo HTML5 e CSS3', 1.5,'<iframe width="300" height="200" src="https://www.youtube.com/embed/JlE0pzESf5g" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');


