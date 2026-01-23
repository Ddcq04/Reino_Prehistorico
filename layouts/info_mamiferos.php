<?php  
    require_once __DIR__ . '/../app/tiempo.php';
    require_once "../app/config.php";
    $id_dinosaurio = $_GET["id"];
    $modelo = AccesoDatos::getModelo();
    $dinosaurio = $modelo->getDinosaurio($id_dinosaurio);
    $tipo = $dinosaurio->tipo;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($dinosaurio->nombre); ?> - Información</title>
    <link rel="StyleSheet" href="../web/css/info_mamifero.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <!-- Video-->
    <video autoplay muted loop id="videoFondo">
        <source src="../web/videos/hielo.mp4" type="video/mp4">
    </video>
    <a href="mamiferos.php" class="btn-volver btn-terrestre">
        <i class="fas fa-arrow-left"></i> Volver
    </a>
    <?php $tipo = strtolower($tipo) ?>
    <!--Tarjeta-->
    <div class="tarjeta tarjeta-<?= $tipo ?>">
        <div class="cabecera cabecera-<?= $tipo ?>">
            <h1><?php echo htmlspecialchars($dinosaurio->nombre); ?></h1>
        </div>
        <div class="cuerpo">
            <!-- Imagen -->
            <div class="imagen imagen-<?= $tipo ?>">
                <img src="../web/img/Mamiferos/<?= $dinosaurio->id ?>.jpg" alt="<?=$dinosaurio->nombre ?>">
                <div class="numero">#<?= str_pad($dinosaurio->id, 3, '0', STR_PAD_LEFT) ?></div>
            </div>

            <!-- Información -->
            <div class="info info-<?= $tipo ?>">
                <h2><i class="fas fa-info-circle"></i> Información</h2>

                <div class="dato dato-<?= $tipo ?>">
                    <span><i class="fas fa-hourglass-half"></i> Era:</span>
                    <span><?= $dinosaurio->nombre_era ?></span>
                </div>
       
                <div class="dato dato-<?= $tipo ?>">
                    <span><i class="fas fa-clock"></i> Período:</span>
                    <span><?= $dinosaurio->nombre_periodo ?></span>
                </div>
                
                <div class="dato dato-<?= $tipo ?>">
                    <span><i class="fas fa-globe"></i> Ubicación:</span>
                    <span><?= $dinosaurio->ubicacion ?></span>
                </div>
                
                <div class="dato dato-<?= $tipo ?>">
                    <span><i class="fas fa-calendar-alt"></i> Tiempo de vida:</span>
                    <span><?= $dinosaurio->tiempo_vida ?></span>
                </div>
                
                <div class="dato dato-<?= $tipo ?>">
                    <span><i class="fas fa-utensils"></i> Alimentación:</span>
                    <span><?= $dinosaurio->alimentacion ?></span>
                </div>
                
                <div class="dato dato-<?= $tipo ?>">
                    <span><i class="fas fa-users"></i> Familia:</span>
                    <span><?= $dinosaurio->familia ?></span>
                </div>
                
                <div class="dato dato-<?= $tipo ?>">
                    <span><i class="fas fa-dna"></i> Especie:</span>
                    <span><?= $dinosaurio->especie ?></span>
                </div>

                <!-- Agresividad -->
                <div class="agresividad">
                    <span><i class="fas fa-skull-crossbones"></i> Agresividad:</span>
                    <div class="barra">
                        <?php 
                        $agresividad_num = (int)$dinosaurio->agresividad;
                        for ($i = 1; $i <= 4; $i++):
                            $activo = $i <= $agresividad_num;
                        ?>
                            <div class="segmento <?= $activo ? 'activo' : '' ?>"></div>
                        <?php endfor; ?>
                    </div>
                    <div class="niveles">
                        <span>Muy baja</span>
                        <span>Baja</span>
                        <span>Media</span>
                        <span>Alta</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>