
CREATE  TABLE Usuario(
  idUsuario INT NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(100) NOT NULL ,
  apellidoPaterno VARCHAR(100) NOT NULL ,
  apellidoMaterno VARCHAR(100) NOT NULL ,
  sexo CHAR(1)  NOT NULL ,
  dni VARCHAR(8) NOT NULL ,
  direccion VARCHAR(200)  NULL ,
  distrito INT NULL ,
  correo VARCHAR(100) NULL ,
  clave VARCHAR(20) NULL ,
  fechaNacimiento DATE NULL ,
  celular VARCHAR(10) NULL ,
  tipo INT NULL ,
  estado INT NULL ,
  PRIMARY KEY (idUsuario) );
  
    
  CREATE  TABLE  Local(
  idLocal INT NOT NULL AUTO_INCREMENT ,
  nombre VARCHAR(45) ,
  distrito INT ,
  direccion VARCHAR(200)  ,
  telefono VARCHAR(10) ,
  idUsuario INT NOT NULL ,
  PRIMARY KEY (idLocal) ,
  CONSTRAINT fk_Local_Usuario1
    FOREIGN KEY (idUsuario )
    REFERENCES Usuario (idUsuario));
	
CREATE INDEX fk_Local_Usuario1 ON Local(idUsuario ASC) ;  

CREATE  TABLE Cancha(
  idCancha INT NOT NULL AUTO_INCREMENT ,
  nombre VARCHAR(45)  ,
  tarifaD double ,
  tarifaN double ,
  idLocal INT NOT NULL ,
  PRIMARY KEY (idCancha) ,
  CONSTRAINT fk_Cancha_Local1
    FOREIGN KEY (idLocal)
    REFERENCES Local(idLocal));
CREATE INDEX fk_Cancha_Local1 ON Cancha(idLocal ASC) ;

CREATE  TABLE  Promocion (
  idPromocion INT NOT NULL AUTO_INCREMENT ,
  nombre VARCHAR(200) ,
  descripcion  text ,
  precio double ,
  PRIMARY KEY (idPromocion) );

CREATE  TABLE HorarioCancha (
  idHorario INT NOT NULL  AUTO_INCREMENT,
  dia INT  ,
  hora time ,
  idCancha INT NOT NULL ,
  PRIMARY KEY (idHorario) ,
  CONSTRAINT fk_HorarioCancha_Cancha1
    FOREIGN KEY (idCancha)
    REFERENCES Cancha(idCancha));

CREATE INDEX fk_HorarioCancha_Cancha1 ON HorarioCancha(idCancha ASC) ;

CREATE  TABLE AlquilerCancha (
  idHorario INT NOT NULL AUTO_INCREMENT ,
  idUsuario INT NOT NULL ,
  fecha DATE ,
  horaInicio TIME ,
  horaFin TIME ,
  PRIMARY KEY (idHorario, idUsuario),
  CONSTRAINT fk_HorarioCancha1
    FOREIGN KEY (idHorario)
    REFERENCES HorarioCancha(idHorario),
  CONSTRAINT fk_Usuario1
    FOREIGN KEY (idUsuario)
    REFERENCES Usuario(idUsuario));
    
    CREATE INDEX fk_HorarioCancha_has_Usuario_Usuario1 ON AlquilerCancha(idUsuario ASC) ;
    CREATE INDEX fk_HorarioCancha_has_Usuario_HorarioCancha1 ON AlquilerCancha(idHorario ASC) ;

	
	
CREATE  TABLE AlquilerCanchaPromocion (
  idHorario INT NOT NULL AUTO_INCREMENT,
  idUsuario INT NOT NULL ,
  idPromocion INT NOT NULL ,
  precio double ,
  precioPromocion double ,
  precioTotal double ,
  PRIMARY KEY (idHorario, idUsuario, idPromocion) ,
  CONSTRAINT fk_HorarioCancha_has_Usuario_has_Promocion_HorarioCancha_has_1
    FOREIGN KEY (idHorario, idUsuario )
    REFERENCES AlquilerCancha (idHorario,idUsuario),
  CONSTRAINT fk_HorarioCancha_has_Usuario_has_Promocion_Promocion1
    FOREIGN KEY (idPromocion)
    REFERENCES Promocion(idPromocion));

CREATE INDEX fk_HorarioCancha_has_Usuario_has_Promocion_Promocion1 ON AlquilerCanchaPromocion (idPromocion ASC) ;

CREATE INDEX fk_HorarioCancha_has_Usuario_has_Promocion_HorarioCancha_has_1 ON AlquilerCanchaPromocion (idHorario ASC, idUsuario ASC) ;
	