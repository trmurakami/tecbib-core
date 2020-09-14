CREATE EXTENSION pgcrypto;

INSERT INTO users (id,email, password,nome,sobrenome) VALUES
  ('trmurakami','trmurakami@gmail.com', crypt('12345', gen_salt('bf', 8)),'Tiago','Murakami');