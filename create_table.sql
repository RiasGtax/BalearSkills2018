CREATE TABLE Alojamientos (
  C1 TEXT,
  C2 TEXT,
  C3 TEXT,
  C4 TEXT,
  C5 TEXT,
  C6 TEXT,
  C7 TEXT,
  C8 TEXT,
  C9 TEXT,
  C10 TEXT,
  C11 TEXT,
  C12 TEXT,
  C13 TEXT,
  C14 TEXT,
  C15 TEXT,
  C16 TEXT,
  C17 TEXT,
  C18 TEXT,
  C19 TEXT,
  C20 TEXT,
  C21 TEXT,
  C22 TEXT,
  C23 TEXT,
  C24 TEXT,
  C25 TEXT,
  C26 TEXT,
  C27 TEXT,
  C28 TEXT,
  C29 TEXT,
  C30 TEXT,
  C31 TEXT,
  C32 TEXT,
  C33 TEXT,
  C34 TEXT,
  C35 TEXT,
  C36 TEXT,
  C37 TEXT,
  C38 TEXT,
  C39 TEXT
);


CREATE TABLE Comentarios (
  C1 TEXT,
  C2 TEXT,
  C3 TEXT,
  C4 TEXT,
  C5 TEXT
);


CREATE TABLE Precios (
  categoria TEXT,
  temporada TEXT,
  preu TEXT,
  temprada TEXT,
  preubaixa TEXT
);


CREATE TABLE Reservas (
  allotjament TEXT,
  client TEXT,
  entrada TEXT,
  sortida TEXT,
  preu TEXT,
  estat TEXT,
  data TEXT
);


CREATE TABLE Servicios (
  cat TEXT,
  esp TEXT,
  eng TEXT,
  id TEXT
);


CREATE TABLE TipoAlojamientos (
  cat TEXT,
  esp TEXT,
  eng TEXT,
  id TEXT
);


CREATE TABLE Traducciones (
  cat TEXT,
  esp TEXT,
  eng TEXT
);


CREATE TABLE Usuarios (
  nom TEXT,
  llinatges TEXT,
  dni TEXT,
  telefon TEXT,
  email TEXT,
  password TEXT
);
