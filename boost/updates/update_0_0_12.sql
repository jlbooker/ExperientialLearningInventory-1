ALTER TABLE intern_admin ADD COLUMN department_id INT NOT NULL REFERENCES intern_department(id);