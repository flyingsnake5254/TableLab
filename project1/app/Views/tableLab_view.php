<!DOCTYPE html>
<html>
    <head>
        <title><?= esc($title) ?></title>
         <!-- Bootstrap CDN -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="column">
                    <table class="table caption-top table-striped table-hover" >
                        <caption style="font-size: 30px;"><?= esc($table_title) ?></caption>
                        <thead>
                        <tr>
                            <?php 
                                foreach ($table_header as $header) : 
                            ?>

                            <th><?= esc($header) ?></th>
                            <?php
                                endforeach 
                            ?>
                        </tr>
                        </thead>
                        <tbody>
                            <?php 
                                foreach ($table_body as $data_row) : 
                            ?>
                            <tr>
                                <?php 
                                    foreach ($data_row as $data_column) : 
                                ?>
                                    <td><?= esc($data_column) ?></td>
                                <?php 
                                    endforeach 
                                ?>
                            </tr>
                            <?php 
                                endforeach 
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>