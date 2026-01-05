-------------------CREACION DE TABLAS-----------------
CREATE TABLE Era (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(50) UNIQUE NOT NULL
);

CREATE TABLE Periodo (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL,
    id_era INT NOT NULL,
    FOREIGN KEY (id_era) REFERENCES Era(id) ON DELETE RESTRICT
);

CREATE TABLE Dinosaurio (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    id_periodo INT NOT NULL,
    tiempo_vida VARCHAR(100) NOT NULL,
    ubicacion VARCHAR(100) NOT NULL,
    alimentacion VARCHAR(50) NOT NULL,
    agresividad INT NOT NULL,
    familia VARCHAR(50) NOT NULL,
    especie VARCHAR(100) NOT NULL,
    tipo VARCHAR(20) NOT NULL,
    FOREIGN KEY (id_periodo) REFERENCES Periodo(id) ON DELETE RESTRICT
);

CREATE TABLE Usuario (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL,
    hash_contrasena VARCHAR(255) NOT NULL,
    correo VARCHAR(100) NOT NULL
);

CREATE TABLE Voto (
    id_usuario INT NOT NULL,
    id_dinosaurio INT NOT NULL,
    PRIMARY KEY (id_usuario, id_dinosaurio),
    FOREIGN KEY (id_usuario) REFERENCES Usuario(id) ON DELETE CASCADE,
    FOREIGN KEY (id_dinosaurio) REFERENCES Dinosaurio(id) ON DELETE CASCADE
);


------------------INSERCION DE DATOS-------------------
INSERT INTO Era(nombre) VALUES ("Mesozoico"),("Cenozoico");
INSERT INTO Periodo (nombre, id_era) VALUES 
('Triásico', 1), 
('Jurásico', 1), 
('Cretácico', 1),
('Paleógeno', 2),
('Neógeno', 2),
('Cuaternario', 2);
INSERT INTO Dinosaurio (nombre, id_periodo, tiempo_vida, ubicacion, alimentacion, agresividad, familia, especie, tipo) VALUES
--Terrestres--
('Tiranosaurio Rex', 3, 'Hace 68-66 millones de años', 'Oeste de Norteamérica', 'Carnívoro', 4, 'Tyrannosauridae', 'Tyrannosaurus rex', 'Terrestre'),
('Triceratops', 3, 'Hace 68-66 millones de años', 'Norteamérica', 'Herbívoro', 2, 'Ceratopsidae', 'Triceratops horridus', 'Terrestre'),
('Velociraptor', 3, 'Hace 75-71 millones de años', 'Asia', 'Carnívoro', 3, 'Dromaeosauridae', 'Velociraptor mongoliensis', 'Terrestre'),
('Ankilosaurio', 3, 'Hace 68-66 millones de años', 'Norteamérica', 'Herbívoro', 2, 'Ankylosauridae', 'Ankylosaurus magniventris', 'Terrestre'),
('Brachiosaurio', 2, 'Hace 154-150 millones de años', 'Norteamérica y África', 'Herbívoro', 1, 'Brachiosauridae', 'Brachiosaurus altithorax', 'Terrestre'),
('Allosaurio', 2, 'Hace 155-145 millones de años', 'Norteamérica', 'Carnívoro', 3, 'Allosauridae', 'Allosaurus fragilis', 'Terrestre'),
('Iguanodon', 3, 'Hace 126-122 millones de años', 'Europa', 'Herbívoro', 2, 'Iguanodontidae', 'Iguanodon bernissartensis', 'Terrestre'),
('Carnotauro', 3, 'Hace 72-69 millones de años', 'Sudamérica', 'Carnívoro', 3, 'Abelisauridae', 'Carnotaurus sastrei', 'Terrestre'),
('Parasaurio', 3, 'Hace 76-73 millones de años', 'Norteamérica', 'Herbívoro', 1, 'Hadrosauridae', 'Parasaurolophus walkeri', 'Terrestre'),
('Diplodocus', 2, 'Hace 154-152 millones de años', 'Norteamérica', 'Herbívoro', 1, 'Diplodocidae', 'Diplodocus longus', 'Terrestre'),
('Stegosaurus', 2, 'Hace 155-150 millones de años', 'Norteamérica', 'Herbívoro', 1, 'Stegosauridae', 'Stegosaurus stenops', 'Terrestre'),
('Spinosaurus', 3, 'Hace 112-93 millones de años', 'Norte de África', 'Carnívoro/Piscívoro', 4, 'Spinosauridae', 'Spinosaurus aegyptiacus', 'Terrestre'),
--Acuaticos--
('Liopleurodon', 2, 'Hace 160-155 millones de años', 'Europa', 'Carnívoro', 4, 'Pliosauridae', 'Liopleurodon ferox', 'Acuatico'),
('Mosasaurus', 3, 'Hace 70-66 millones de años', 'Mundial', 'Carnívoro', 4, 'Mosasauridae', 'Mosasaurus hoffmannii', 'Acuatico'),
('Plesiosaurus', 2, 'Hace 199-175 millones de años', 'Europa', 'Piscívoro', 2, 'Plesiosauridae', 'Plesiosaurus dolichodeirus', 'Acuatico'),
('Elasmosaurus', 3, 'Hace 80-65 millones de años', 'Norteamérica', 'Piscívoro', 2, 'Elasmosauridae', 'Elasmosaurus platyurus', 'Acuatico'),
('Ichthyosaurus', 2, 'Hace 200-190 millones de años', 'Europa', 'Piscívoro', 1, 'Ichthyosauridae', 'Ichthyosaurus communis', 'Acuatico'),
('Kronosaurus', 3, 'Hace 125-100 millones de años', 'Australia', 'Carnívoro', 4, 'Pliosauridae', 'Kronosaurus queenslandicus', 'Acuatico'),
('Leedsichthys', 2, 'Hace 165-152 millones de años', 'Europa', 'Planctívoro', 1, 'Pachycormidae', 'Leedsichthys problematicus', 'Acuatico'),
('Nothosaurus', 1, 'Hace 240-210 millones de años', 'Europa y Asia', 'Piscívoro', 2, 'Nothosauridae', 'Nothosaurus mirabilis', 'Acuatico'),
('Dunkleosteus', 1, 'Hace 380-360 millones de años', 'Norteamérica y Europa', 'Carnívoro', 4, 'Dunkleosteidae', 'Dunkleosteus terrelli', 'Acuatico'),
('Ammonite', 3, 'Hace 400-66 millones de años', 'Mundial', 'Carnívoro', 1, 'Ammonoidea', 'Varias especies', 'Acuatico'),
('Megalodon', 3, 'Hace 23-3.6 millones de años', 'Mundial', 'Carnívoro', 4, 'Otodontidae', 'Otodus megalodon', 'Acuatico'),
('Archelon', 3, 'Hace 80-74 millones de años', 'Norteamérica', 'Omnívoro', 1, 'Protostegidae', 'Archelon ischyros', 'Acuatico'),
--Voladores--
('Hatzegopteryx', 3, 'Hace 66 millones de años', 'Europa', 'Carnívoro', 3, 'Azhdarchidae', 'Hatzegopteryx thambema', 'Volador'),
('Pteranodon', 3, 'Hace 86-84 millones de años', 'Norteamérica', 'Piscívoro', 1, 'Pteranodontidae', 'Pteranodon longiceps', 'Volador'),
('Quetzalcoatlus', 3, 'Hace 68-66 millones de años', 'Norteamérica', 'Carnívoro', 2, 'Azhdarchidae', 'Quetzalcoatlus northropi', 'Volador'),
('Rhamphorhynchus', 2, 'Hace 150-144 millones de años', 'Europa', 'Piscívoro', 1, 'Rhamphorhynchidae', 'Rhamphorhynchus muensteri', 'Volador'),
('Dimorphodon', 2, 'Hace 195-190 millones de años', 'Europa', 'Insectívoro', 1, 'Dimorphodontidae', 'Dimorphodon macronyx', 'Volador'),
('Tapejara', 3, 'Hace 112-108 millones de años', 'Sudamérica', 'Frugívoro', 1, 'Tapejaridae', 'Tapejara wellnhoferi', 'Volador'),
('Anhanguera', 3, 'Hace 112-108 millones de años', 'Sudamérica', 'Piscívoro', 1, 'Anhangueridae', 'Anhanguera blittersdorffi', 'Volador'),
('Ornithocheirus', 3, 'Hace 110-100 millones de años', 'Europa y Sudamérica', 'Piscívoro', 1, 'Ornithocheiridae', 'Ornithocheirus simus', 'Volador'),
('Dsungaripterus', 3, 'Hace 130-120 millones de años', 'Asia', 'Carnívoro', 2, 'Dsungaripteridae', 'Dsungaripterus weii', 'Volador'),
('Tupandactylus', 3, 'Hace 112-108 millones de años', 'Sudamérica', 'Frugívoro', 1, 'Tapejaridae', 'Tupandactylus imperator', 'Volador'),
('Cearadactylus', 3, 'Hace 112-108 millones de años', 'Sudamérica', 'Piscívoro', 2, 'Anhangueridae', 'Cearadactylus atrox', 'Volador'),
('Nyctosaurus', 3, 'Hace 85-84 millones de años', 'Norteamérica', 'Piscívoro', 1, 'Nyctosauridae', 'Nyctosaurus gracilis', 'Volador');
--Mamiferos--
