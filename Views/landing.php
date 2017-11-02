<html>
<head>
    <title>Shelby</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<div class="row text-center">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1>Search</h1><br>
            </div>
            <div class="modal-body margin10px">

                <form  action="index.php?page=search" method="post">
                    <input type="text" name="search" placeholder="id to search">

                    <input type="submit" name="login" class="login loginmodal-submit" value="Search">
                </form>

                <?php
                    if(isset($_GET['alreadyImported']) and $_GET['alreadyImported'])
                    {
                        ?>
                        <div class="text-danger">
                            Already imported
                        </div>
                        <?php
                    }
                ?>



            </div>
        </div>
    </div>
</div>
<div class="row text-center">
    <a href="index.php?page=setAllAsSaved">
        <button class="btn btn-danger">Set All as saved and export</button>
    </a>
    <a href="index.php?page=getCsv">
        <button class="btn btn-danger">Get back up</button>
    </a>
</div>
<div class="">
    <table>
        <th>
           Album Id
        </th>
        <th>
            Artist
        </th>
        <th>
            Album Title
        </th>
        <th>
            Album Version
        </th>
        <th>
            UPC
        </th>
        <th>
            Catalog
        </th>
        <th>
            Release Date
        </th>
        <th>
            Marketing Label
        </th>
        <th>
           Disk #
        </th>
        <th>
            Track #
        </th>
        <th>
            ISRC
        </th>
        <th>
            Track Title
        </th>
        <th>
            Still Fighting
        </th>
        <th>
            Track Artist
        </th>
        <th>
            Track Timing
        </th>
        <th>
            Explicit(Y/N)
        </th>
        <th>
            Genre
        </th>
        <th>
            Recording Date
        </th>
        <th>
            Recording Location
        </th>
        <th>
            First Date of Release
        </th>
        <th>
            First Country of Release
        </th>
        <?php
            foreach ($traks as $trak)
            {
                ?>
                <tr>
                    <td>
                        <?php echo $trak->getAlbumDeezerId(); ?>
                    </td>
                    <td>
                        <?php echo $trak->getArtist(); ?>
                    </td>
                    <td>
                        <?php echo $trak->getAlbumTitle(); ?>
                    </td>
                    <td>

                    </td>
                    <td>
                        <?php echo $trak->getUpc(); ?>
                    </td>
                    <td>
                        <?php echo $trak->getUpc(); ?>
                    </td>
                    <td>
                        <?php echo $trak->getReleaseDate(); ?>
                    </td>
                    <td>
                        <?php echo $trak->getMarketingLabel(); ?>
                    </td>
                    <td>

                    </td>
                    <td>
                        <?php echo $trak->getTrackDeezerId(); ?>
                    </td>
                    <td>
                        <?php echo $trak->getIsrc(); ?>
                    </td>
                    <td>
                        <?php echo $trak->getTrackTitle(); ?>
                    </td>
                    <td>

                    </td>
                    <td>
                        <?php echo $trak->getTrackArtist(); ?>
                    </td>
                    <td>

                    </td>
                    <td>

                    </td>
                    <td>
                        <?php echo $trak->getGender(); ?>
                    </td>
                    <td>
                        <?php echo $trak->getRecordingDate(); ?>
                    </td>
                    <td>

                    </td>
                    <td>
                        <?php echo $trak->getFirstDateOfRelease(); ?>
                    </td>
                    <td>
                        <?php echo $trak->getFirstCountryOfRelease(); ?>
                    </td>
                </tr>

                <?php
            }

        ?>
    </table>
</div>

</body>
</html>