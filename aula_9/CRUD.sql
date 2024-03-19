# 1° Usar o banco
use parking_sao_leopoldo_afternoom;

# Cadastro de registros
insert into parking_lots(number,situation,status) values (5,'Disponível',1);
insert into parking_lots values (10,'Disponível',1);
insert into clients values ('592.504.190-90','Juliana Marli Duarte','(51) 98765-4321',1);
insert into clients values('727.945.710-01','Tatiane Carla Emanuelly Ramos','(51) 99918-1539',1);
insert into transactions values (1,'LVM-6994','BMW','X6 XDRIVE 50i M Sport 4.4 Bi-Turbo','Vermelho','14:00:00',null,null,'592.504.190-90',5,1);
insert into transactions values (2,'MZE-5906','Mercedes-Benz','GLA 200 Style 1.6 TB 16V/Flex Aut.','Preto','10:00:00',null,null,'727.945.710-01',10,1);

# Atualização das ocupações das vagas - Ocupadas
update parking_lots set situation = 'Ocupada' where number = 5 or number = 10;

#Atualização das transações
update transactions set departure_time = '19:00:00', amount_paid = 75 where id = 1;
update transactions set departure_time = '12:00:00', amount_paid = 30 where id = 2;
# Atualização das ocupações das vagas - Disponíveis
update parking_lots set situation = 'Disponível' where number = 5 or number = 10;

# Consulta Simples
select number,situation from parking_lots;

# Consulta com Junção de Tabelas
select t.entry_time,t.departure_time,c.fullname,t.parking_lot_number from transactions t inner join clients c on t.client = c.cpf;

# Consulta com Filtros e Ordenação
select id,entry_time,departure_time from transactions where departure_time >= '18:00:00' order by departure_time desc;

# Relatório de Receitas
select sum(amount_paid) as 'Receita total' from transactions;