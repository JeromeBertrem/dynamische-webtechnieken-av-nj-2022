<?php $persoonsgevens = [
    'beeld' => 'https://monstar-lab.com/global/wp-content/uploads/sites/11/2019/04/male-placeholder-image-300x300.jpeg',
    'naam' => 'Bert Jansen',
    'beroep' => 'Docent',
    'gehuwd' => 'Ja',
    'woonplaats' => 'Kalmthout',
    'email' => 'info@data-web.be',
    'hobbys' => [
        'TV kijken', 
        'programmeren',
        'Italiaans eten',
    ],
]; 
?>
<html>
    <head>
        <title>fiche</title>
    </head>
    <body>
        <table cellpadding="10">
            <tr>
                <td rowspan="5"><img src="<?php echo $persoonsgevens['beeld']; ?>" /></td>
                <td><u>Naam:</u> <strong><?php echo $persoonsgevens['naam']; ?></strong></td>
            </tr>
            <tr>
                <td><u>Beroep:</u> <strong><?php echo $persoonsgevens['beroep']; ?></strong></td>
            </tr>
            <tr>
                <td><u>Gehuwd:</u> <strong><?php echo $persoonsgevens['gehuwd']; ?></strong></td>
            </tr>
            <tr>
                <td><u>Woonplaats:</u> <strong><?php echo $persoonsgevens['woonplaats']; ?></strong></td>
            </tr>
            <tr>
                <td><u>E-mail:</u> <strong><?php echo $persoonsgevens['email']; ?></strong></td>
            </tr>
            <tr>
            <td colspan="2"><u>Hobby's:</u>
                <ul>
                    <li><?php echo $persoonsgevens['hobbys'][0]; ?></li>
                    <li><?php echo $persoonsgevens['hobbys'][1]; ?></li>
                    <li><?php echo $persoonsgevens['hobbys'][2]; ?></li>
                </ul>
            </td>
            </tr>
            </table>
    </body>
</html>