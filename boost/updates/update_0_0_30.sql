alter table intern_student add column level character varying;
update intern_student set level = 'ugrad';
alter table intern_student alter column level set NOT NULL;