-- EJEMPLO INSERCION CONTRASEÑA NORMAL
INSERT INTO TBL_USUARIO(USERNAME,PASS,ESTADO,NIVEL) VALUES('74655670','attoo',1,4);

-- EJEMPLO INSERCION CONTRASEÑA ENCRIPTADA
INSERT INTO TBL_USUARIO(USERNAME,PASS,ESTADO,NIVEL) VALUES('74655670',AES_ENCRYPT('attoo','atoo'),1,4);

SELECT * FROM TBL_USUARIO;