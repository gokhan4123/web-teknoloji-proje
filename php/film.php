<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Alanlarım</title>
</head>
<body>
    <h2 style="padding:50px 50px; ">Filmler</h2>

    <?php 

     function printData($url)
     {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/525.13 (KHTML, like Gecko) Chrome/0.A.B.C Safari/525.13");
        $data = curl_exec($ch);
        
        //print_r($data);
        
        $response_data = json_decode($data);

        if(!isset($response_data->Title))
        {
            echo "Filmi bulunamadi";
        }
        else
        {   
            $title= $response_data->Title;
            $poster= $response_data->Poster;
            $year= $response_data->Year;
            $runTime = $response_data->Runtime;
            $genre= $response_data->Genre;
            $language= $response_data->Language;
            $plot = $response_data->Plot;
            $country= $response_data->Country;

            if(isset($response_data->Ratings[2]->Source))
            {
                $ratingSource = $response_data->Ratings[2]->Source;
                $rating= $response_data->Ratings[2]->Value;
            }
            else
            {
                $rating= "";
            }
            

            echo "<div style='
                    padding:50px 50px;
                    margin-left:50px;
                    '
                class='movie-main'>
                    <div class='container'>
                        <div class='row'>
                            <div class='col-md-6'>
                                <img src='$poster'>
                            </div>

                            <div class='col-md-6'>
                                <h3>Filmin Adı: </h3> $title
                                <h3>Yıl: </h3> $year 
                                <h3>Zaman: </h3> $runTime 
                                <h3>Year: </h3> $year 
                                <h3>Tür: </h3> $genre
                                <h3>Dil: </h3> $language
                                <h3>Ülke: </h3> $country
                                <h3>Rating: </h3> $rating

                            </div>
                        </div>
                    </div>
                </div>";
            }
            
            curl_close($ch);
     }

    

     if(isset($_POST['submit']))
     {
        $title = $_POST['title'];
        
        for($x = 0 ; $x < strlen($title) ; $x++)
        {
            if($title[$x] == ' ') $title[$x] = '+';
        }
        
        $pre_url = 'http://www.omdbapi.com/?t=';
        $post_url = '&apikey=2b8d776e';
        $final_url = $pre_url.$title.$post_url;
        printData($final_url);
     }
     else
     {
        $api_url = "http://www.omdbapi.com/?t=Titanic&apikey=2b8d776e";
        printData($api_url);
     }
       
    ?>
    
    <div class="search-box" style="
        padding:50px 50px;
    ">
        <h2>Filmi Ara</h2>
        <form action="" method="post"
        style="
            padding:20px 0px;
        ">
            <input type="text" name="title" id="title" />
            <input name="submit" type="submit" class="btn btn-primary"/>
        </form>
    </div>

</body>
</html>