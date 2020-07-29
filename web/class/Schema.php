<?php
require_once 'web/class/Server.php';

class Schema
{

    /* SCHEMA CHO TRANG CHỦ */
    function generate_schema($data, $page)
    {
        $server = new Server();
        $serverName = $server->get_servername();
        $stringSchema = "{";
        if ($page == "main-home") {
            $dataSchema = array(
                "@context" => "https://schema.org/",
                "@type" => "Organization",
                "name" => "Review Trường",
                "url" => "https:" . $serverName,
                "logo" => "https:" . $serverName . "/web/public/images/logo.png"
            );
            $stringSchema = json_encode($dataSchema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
        }
        if ($page == "school") {
            $tenSchool = "";
            $slugSchool = "";
            $idSchool = "";
            $ratingCount = 0;
            $ratingValue = 0;
            while ($r = mysqli_fetch_array($data)) {
                $tenSchool = $r["tenschool"];
                $category = $r["category"];
                $slugSchool = $r["slugschool"];
                $idSchool = $r["id"];
                $ratingCount = (float) $r["luotdanhgia"];
                $ratingValue = (float) $r["rate"];
            }
            $dataItemReviewed = array(
                "@type" => "School",
                "name" => $category." ".$tenSchool,
                "sameAs" => "https:" . $serverName . "/school/" . $slugSchool . "-" . $idSchool
            );
            
            $dataSchema = array(
                "@context" => "https://schema.org/",
                "@type" => "AggregateRating",
                "itemReviewed" => $dataItemReviewed,
                "ratingCount" => $ratingCount,
                "ratingValue" => $ratingValue
            );
            $stringSchema = json_encode($dataSchema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
        }
        return $stringSchema;
    }

    /* SCHEMA CHO REVIEW */
    function generate_schema_for_review($dataSchool, $dataReview)
    {
        $server = new Server();
        $serverName = $server->get_servername();
        $arraySchemaReview = array();
        $tenSchool = "";
        $hinhSchool = "";
        $ratingValue = 0;
        while ($r = mysqli_fetch_array($dataSchool)) {
            $tenSchool = $r["tenschool"];
            $hinhSchool = "https:" . $serverName . "/web/public/asset/schools/logo/" . $r["logo"];
            $ratingValue = (float) $r["rate"];
        }
        $itemReviewed = array(
            "@type" => "Organization",
            "image" => $hinhSchool,
            "name" => $tenSchool
        );
        $reviewRating = array(
            "@type" => "Rating",
            "ratingValue" => $ratingValue
        );
        $author = array(
            "@type" => "Person",
            "name" => "Anonymous"
        );
        $publisher = array(
            "@type" => "Organization",
            "name" => "ReviewTruong.com"
        );
        
        // each review schema
        $arraySchemaReview = array(
            "@context" => "https://schema.org/",
            "@type" => "Review",
            "itemReviewed" => $itemReviewed,
            "reviewRating" => $reviewRating,
            "name" => $tenSchool,
            "author" => $author,
            "publisher" => $publisher
        );
        $returnArray = array();
        while ($row = mysqli_fetch_array($dataReview)) {
            $reviewBody = $row["review_noidung"];
            $arraySchemaReview["reviewBody"] = $reviewBody;
            $stringSchemaReview = json_encode($arraySchemaReview, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
            array_push($returnArray, $stringSchemaReview);
        }
        
        return $returnArray;
    }
}
?>