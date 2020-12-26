<?php require("header.php");
$page = "";
$link = "";
switch ($_GET['doc']) {
    case "a1":
        $page = "Stacks and Queues";
        $link = "docs/Assignment1Documentation.pdf";
        break;
    case "a2":
        $page = "Sortings";
        $link = "docs/Assignment_2.pdf";
        break;
    case "a3":
        $page = "Binary Search and Hash Table";
        $link = "docs/Assignment_3.pdf";
        break;
    case "a4":
        $page = "Graphs and Binary Search Trees";
        $link = "docs/Assignment_4.pdf";
        break;
    case "a5":
        $page = "Bellman Ford SSSP, Greedy Approaches, and Fractional Knapsack";
        $link = "docs/Assignment_5.pdf";
        break;
    case "sem":
        $page = "Pooled Testing Simulator";
        $link = "docs/Semester_Project.pdf";
        break;
}



?>
<div class="row">
    <div class="col-2">
        <a href="DSA.php"><button class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z" />
                </svg> Back</button></a>

    </div>
</div>
<div class="  jumbotron">
    <div class="row">
        <div class="col-lg-12" style="text-align:center">
            <h4 class="display-3" style="color:salmon">Some Documentation</h4>
            <h4 class="display-5">Documentation for <?php echo $page ?> </h4>
            <p>Note: If the document does not appear below, check your downloads folder</p>
        </div>

    </div>

</div>
<div class="row">
    <iframe src="<?php echo $link ?>" width="100%" height="1000px">
</div>


<?php require("footer.php"); ?>
</body>

</html>