<div class="container">
    <h2>Ejemplo sobre como elaborar un CRUD</h2>
    <!-- add song form -->
    <div class="box">
        <h3>Agregar canción</h3>
        <form action="<?php echo URL; ?>songs/addsong" method="POST">
            <label>Artista</label>
            <input type="text" name="artist" value="" required />
            <label>Canción</label>
            <input type="text" name="track" value="" required />
            <label>Link</label>
            <input type="text" name="link" value="" />
            <input type="submit" name="submit_add_song" value="Submit" />
        </form>
    </div>
    <!-- main content output -->
    <div class="box">
        <h3>Canciones registradas</h3>
        <div>
            <?php echo $amount_of_songs; ?>
        </div>
        <h3>Lista de canciones</h3>
        <table>
            <thead style="background-color: #ddd; font-weight: bold;">
            <tr>
                <td>Id</td>
                <td>Artista</td>
                <td>Canción</td>
                <td>Link</td>
                <td>Eliminar</td>
                <td>Editar</td>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($songs as $song) { ?>
                <tr>
                    <td><?php if (isset($song->id)) echo htmlspecialchars($song->id, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($song->artist)) echo htmlspecialchars($song->artist, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($song->track)) echo htmlspecialchars($song->track, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td>
                        <?php if (isset($song->link)) { ?>
                            <a href="<?php echo htmlspecialchars($song->link, ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($song->link, ENT_QUOTES, 'UTF-8'); ?></a>
                        <?php } ?>
                    </td>
                    <td><a href="<?php echo URL . 'songs/deletesong/' . htmlspecialchars($song->id, ENT_QUOTES, 'UTF-8'); ?>">delete</a></td>
                    <td><a href="<?php echo URL . 'songs/editsong/' . htmlspecialchars($song->id, ENT_QUOTES, 'UTF-8'); ?>">edit</a></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>
