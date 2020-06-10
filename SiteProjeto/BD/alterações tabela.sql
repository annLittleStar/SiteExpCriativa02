use sea;

alter table funcionario
add column categoria enum('Dono', 'Vendedor', 'Lavador') not null;

update funcionario
set categoria = 'Vendedor' where id = 2;

update funcionario
set categoria = 'Lavador' where id = 3;

select*from funcionario;
