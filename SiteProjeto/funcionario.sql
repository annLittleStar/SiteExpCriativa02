
create table funcionario(
	id int not null auto_increment,
    nome varchar(30) not null,
    login varchar(30) not null,
    senha varchar(30) not null,  
    tipo enum('dono', 'funcionario') not null, 
    
    primary key(id)
)
