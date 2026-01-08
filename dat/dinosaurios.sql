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
INSERT INTO Dinosaurio (nombre, id_periodo, tiempo_vida, ubicacion, alimentacion, agresividad, familia, especie, tipo, curiosidad) VALUES
-- Terrestres --
('Tiranosaurio Rex', 3, 'Hace 68-66 millones de años', 'Oeste de Norteamérica', 'Carnívoro', 4, 'Tyrannosauridae', 'Tyrannosaurus rex', 'Terrestre'),
('Triceratops', 3, 'Hace 68-66 millones de años', 'Norteamérica', 'Herbívoro', 2, 'Ceratopsidae', 'Triceratops horridus', 'Terrestre'),
('Velociraptor', 3, 'Hace 75-71 millones de años', 'Asia', 'Carnívoro', 3, 'Dromaeosauridae', 'Velociraptor mongoliensis', 'Terrestre'),
('Ankilosaurio', 3, 'Hace 68-66 millones de años', 'Norteamérica', 'Herbívoro', 2, 'Ankylosauridae', 'Ankylosaurus magniventris', 'Terrestre'),
('Brachiosaurio', 2, 'Hace 154-150 millones de años', 'Norteamérica y África', 'Herbívoro', 1, 'Brachiosauridae', 'Brachiosaurus altithorax', 'Terrestre'),
('Allosaurio', 2, 'Hace 155-145 millones de años', 'Norteamérica', 'Carnívoro', 3, 'Allosauridae', 'Allosaurus fragilis', 'Terrestre'),
('Iguanodon', 3, 'Hace 126-122 millones de años', 'Europa', 'Herbívoro', 2, 'Iguanodontidae', 'Iguanodon bernissartensis', 'Terrestre'),
('Carnotauro', 3, 'Hace 72-69 millones de años', 'Sudamérica', 'Carnívoro', 3, 'Abelisauridae', 'Carnotaurus sastrei', 'Terrestre'),
('Parasaurio', 3, 'Hace 76-73 millones de años', 'Norteamérica', 'Herbívoro', 1, 'Hadrosauridae', 'Parasaurolophus walkeri', 'Terrestre', 'Tenía una cresta ósea hueca en la cabeza que posiblemente usaba para comunicación mediante sonidos de baja frecuencia.'),
('Diplodocus', 2, 'Hace 154-152 millones de años', 'Norteamérica', 'Herbívoro', 1, 'Diplodocidae', 'Diplodocus longus', 'Terrestre', 'Uno de los dinosaurios más largos, con un cuello de hasta 8 metros que usaba como una grúa para alimentarse de árboles altos.'),
('Stegosaurus', 2, 'Hace 155-150 millones de años', 'Norteamérica', 'Herbívoro', 1, 'Stegosauridae', 'Stegosaurus stenops', 'Terrestre', 'Tenía placas óseas en la espalda cuya función sigue siendo misteriosa: ¿regulación térmica, defensa o exhibición?'),
('Spinosaurus', 3, 'Hace 112-93 millones de años', 'Norte de África', 'Carnívoro/Piscívoro', 4, 'Spinosauridae', 'Spinosaurus aegyptiacus', 'Terrestre', 'El dinosaurio carnívoro más grande conocido, semiacuático, con una vela dorsal de hasta 1.8 metros de altura.'),
-- Acuaticos --
('Liopleurodon', 2, 'Hace 160-155 millones de años', 'Europa', 'Carnívoro', 4, 'Pliosauridae', 'Liopleurodon ferox', 'Acuatico', 'Su nombre significa "diente de lados lisos" y era uno de los depredadores marinos más grandes del Jurásico.'),
('Mosasaurus', 3, 'Hace 70-66 millones de años', 'Mundial', 'Carnívoro', 4, 'Mosasauridae', 'Mosasaurus hoffmannii', 'Acuatico', 'Este gran reptil marino no era un dinosaurio, sino un pariente de las serpientes y lagartos actuales.'),
('Plesiosaurus', 2, 'Hace 199-175 millones de años', 'Europa', 'Piscívoro', 2, 'Plesiosauridae', 'Plesiosaurus dolichodeirus', 'Acuatico', 'Su largo cuello con hasta 40 vértebras le permitía sorprender a sus presas desde la distancia.'),
('Elasmosaurus', 3, 'Hace 80-65 millones de años', 'Norteamérica', 'Piscívoro', 2, 'Elasmosauridae', 'Elasmosaurus platyurus', 'Acuatico', 'Tenía el cuello más largo de todos los plesiosaurios, con 72 vértebras cervicales.'),
('Ichthyosaurus', 2, 'Hace 200-190 millones de años', 'Europa', 'Piscívoro', 1, 'Ichthyosauridae', 'Ichthyosaurus communis', 'Acuatico', 'Su nombre significa "lagarto pez" y tenía una forma corporal similar a los delfines actuales.'),
('Kronosaurus', 3, 'Hace 125-100 millones de años', 'Australia', 'Carnívoro', 4, 'Pliosauridae', 'Kronosaurus queenslandicus', 'Acuatico', 'Nombrado en honor a Cronos, el dios griego del tiempo, por su imponente tamaño y ferocidad.'),
('Leedsichthys', 2, 'Hace 165-152 millones de años', 'Europa', 'Planctívoro', 1, 'Pachycormidae', 'Leedsichthys problematicus', 'Acuatico', 'El pez óseo más grande que ha existido, filtrando plancton con sus branquiespinas especializadas.'),
('Nothosaurus', 1, 'Hace 240-210 millones de años', 'Europa y Asia', 'Piscívoro', 2, 'Nothosauridae', 'Nothosaurus mirabilis', 'Acuatico', 'Un reptil semiacuático con patas palmeadas y dientes largos y afilados para atrapar peces.'),
('Dunkleosteus', 1, 'Hace 380-360 millones de años', 'Norteamérica y Europa', 'Carnívoro', 4, 'Dunkleosteidae', 'Dunkleosteus terrelli', 'Acuatico', 'Este placodermo tenía placas óseas en lugar de dientes que funcionaban como cuchillas de tijera.'),
('Ammonite', 3, 'Hace 400-66 millones de años', 'Mundial', 'Carnívoro', 1, 'Ammonoidea', 'Varias especies', 'Acuatico', 'Estos cefalópodos con concha en espiral eran tan abundantes que sus fósiles se usan para datar rocas.'),
('Megalodon', 3, 'Hace 23-3.6 millones de años', 'Mundial', 'Carnívoro', 4, 'Otodontidae', 'Otodus megalodon', 'Acuatico', 'El tiburón más grande que ha existido, con dientes del tamaño de una mano humana adulta.'),
('Archelon', 3, 'Hace 80-74 millones de años', 'Norteamérica', 'Omnívoro', 1, 'Protostegidae', 'Archelon ischyros', 'Acuatico', 'La tortuga marina más grande conocida, con una envergadura de aletas de hasta 4 metros.'),
-- Voladores --
('Hatzegopteryx', 3, 'Hace 66 millones de años', 'Europa', 'Carnívoro', 3, 'Azhdarchidae', 'Hatzegopteryx thambema', 'Volador', 'Vivía en la isla de Hateg, un ecosistema insular donde era el depredador dominante.'),
('Pteranodon', 3, 'Hace 86-84 millones de años', 'Norteamérica', 'Piscívoro', 1, 'Pteranodontidae', 'Pteranodon longiceps', 'Volador', 'Su nombre significa "ala sin dientes" y la cresta de su cabeza posiblemente servía como timón.'),
('Quetzalcoatlus', 3, 'Hace 68-66 millones de años', 'Norteamérica', 'Carnívoro', 2, 'Azhdarchidae', 'Quetzalcoatlus northropi', 'Volador', 'El animal volador más grande de todos los tiempos, con una envergadura similar a un avión pequeño.'),
('Rhamphorhynchus', 2, 'Hace 150-144 millones de años', 'Europa', 'Piscívoro', 1, 'Rhamphorhynchidae', 'Rhamphorhynchus muensteri', 'Volador', 'Tenía una cola rígida con un romboide en la punta que posiblemente le ayudaba a estabilizarse.'),
('Dimorphodon', 2, 'Hace 195-190 millones de años', 'Europa', 'Insectívoro', 1, 'Dimorphodontidae', 'Dimorphodon macronyx', 'Volador', 'Su nombre significa "dos tipos de dientes" por tener dientes de diferentes formas en su mandíbula.'),
('Tapejara', 3, 'Hace 112-108 millones de años', 'Sudamérica', 'Frugívoro', 1, 'Tapejaridae', 'Tapejara wellnhoferi', 'Volador', 'Conocido por su gran cresta craneal que podía medir hasta 1.5 veces el tamaño de su cráneo.'),
('Anhanguera', 3, 'Hace 112-108 millones de años', 'Sudamérica', 'Piscívoro', 1, 'Anhangueridae', 'Anhanguera blittersdorffi', 'Volador', 'Su nombre significa "dragón anciano" en la lengua tupí-guaraní, hablada por indígenas brasileños.'),
('Ornithocheirus', 3, 'Hace 110-100 millones de años', 'Europa y Sudamérica', 'Piscívoro', 1, 'Ornithocheiridae', 'Ornithocheirus simus', 'Volador', 'Tenía una cresta ósea distintiva en el hocico que posiblemente usaba para cortejo o identificación.'),
('Dsungaripterus', 3, 'Hace 130-120 millones de años', 'Asia', 'Carnívoro', 2, 'Dsungaripteridae', 'Dsungaripterus weii', 'Volador', 'Sus mandíbulas curvadas hacia arriba y dientes romos le permitían alimentarse de crustáceos y moluscos.'),
('Tupandactylus', 3, 'Hace 112-108 millones de años', 'Sudamérica', 'Frugívoro', 1, 'Tapejaridae', 'Tupandactylus imperator', 'Volador', 'Su enorme cresta en forma de vela era tan grande que probablemente afectaba su capacidad de vuelo.'),
('Cearadactylus', 3, 'Hace 112-108 millones de años', 'Sudamérica', 'Piscívoro', 2, 'Anhangueridae', 'Cearadactylus atrox', 'Volador', 'Descubierto en el estado brasileño de Ceará, su nombre significa "dedo feroz de Ceará".'),
('Nyctosaurus', 3, 'Hace 85-84 millones de años', 'Norteamérica', 'Piscívoro', 1, 'Nyctosauridae', 'Nyctosaurus gracilis', 'Volador', 'Tenía una gran cresta en forma de L que no tenía función aerodinámica, solo de exhibición.');
--Mamiferos--
INSERT INTO Dinosaurio
(nombre, id_periodo, tiempo_vida, ubicacion, alimentacion, agresividad, familia, especie, tipo)
VALUES
-- ANIMALES VOLADORES 
('Teratornítido', 6, 'Hace 1 millón – 10.000 años', 'Lagos y llanuras templadas', 'Carroñero', 2, 'Teratornithidae', 'Teratornis merriami', 'Volador'),

('Búho Gigante', 6, 'Hace 1 millón – 10.000 años', 'Bosques templados', 'Carnívoro', 3, 'Strigidae', 'Ornimegalonyx oteroi', 'Volador'),

('Águila de Haast', 6, 'Hace 700.000 – 600 años', 'Llanuras abiertas', 'Carnívoro', 4, 'Accipitridae', 'Harpagornis moorei', 'Volador'),

('Cóndor Gigante', 6, 'Hace 2,5 millones – 13.000 años', 'Zonas abiertas y desérticas', 'Carnívoro / Carroñero', 3, 'Teratornithidae', 'Aiolornis incredibilis', 'Volador'),

-- ANIMALES TERRESTRES
('Mamut', 6, 'Hace 400.000 – 4.000 años', 'Estepas heladas', 'Herbívoro', 1, 'Elephantidae', 'Mammuthus primigenius', 'Terrestre'),

('Tigre de Dientes de Sable', 6, 'Hace 2,5 millones – 10.000 años', 'Sabana templada', 'Carnívoro', 4, 'Felidae', 'Smilodon fatalis', 'Terrestre'),

('Perezoso Gigante', 6, 'Hace 1,8 millones – 8.000 años', 'Bosques tropicales', 'Herbívoro', 1, 'Megatheriidae', 'Megatherium americanum', 'Terrestre'),

('Glyptodon', 6, 'Hace 2,5 millones – 10.000 años', 'Praderas y sabanas', 'Herbívoro', 1, 'Glyptodontidae', 'Glyptodon clavipes', 'Terrestre'),

-- ANIMALES ACUÁTICOS
('Morsa Gigante', 6, 'Hace 1 millón de años – actualidad', 'Océanos árticos', 'Carnívoro (molusívoro)', 3, 'Odobenidae', 'Odobenus rosmarus', 'Acuático'),

('Foca Monje Antigua', 6, 'Hace 500.000 años – siglo XX', 'Costas frías', 'Carnívoro (piscívoro)', 3, 'Phocidae', 'Monachus tropicalis', 'Acuático'),

('León Marino Antiguo', 6, 'Hace 2,5 – 0,3 millones de años', 'Aguas templadas', 'Carnívoro (piscívoro)', 3, 'Otariidae', 'Thalassoleon macnallyae', 'Acuático'),

('Vaca Marina de Steller', 6, 'Hace 2 millones de años – 1768 d.C.', 'Aguas frías del Pacífico Norte', 'Herbívoro (algas marinas)', 1, 'Dugongidae', 'Hydrodamalis gigas', 'Acuático');
