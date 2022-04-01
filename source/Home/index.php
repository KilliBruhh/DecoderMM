<?php
    // Makes connection With database
    include('connect.php');

    $decodedCode = "";
    $fout = "";

    $sql = "SELECT * FROM codes";
    $qresult = $link->query($sql);
    
    if(isset($_POST['decodeButton']))
    {
    $gegevencode = $_POST['code'];
    $correct = 0;
       while($endresult = $qresult->fetch_assoc())
       {       
           if($endresult['Tip'] == $gegevencode)
           {    
                $decodedCode = $endresult['Decoded_Tip'];
                $correct = 1;
           }
           
       }
    }   
?>


    <div class="border-2 border-green-900 w-3/4 mx-auto mt-40">
        <div class="border-2 border-green-900 w-2/5 mx-auto border-t-0 h-10 text-center font-bold">
            DECODER DELUXE
        </div>
        <table class="mx-auto mt-6">
            <form name="formulier" id="formulier" method="POST">
                <tr>
                    <td class="text-center">ENTER CODE:</td>
                </tr>
                <tr>
                    <td class=" text-center">
                        <input type="text" name="code" class="border-2 border-green-900 bg-transparent">
                    </td>
                </tr>
                <tr>
                    <td class="text-center"><button class="p-1 mt-5 border-2 border-green-900" name="decodeButton">DECODE</button></td>
                </tr>
                <tr>
                    <td class=" text-center"><p class="mt-5 text-blue-400"><?php echo  $decodedCode?></p></td>
                </tr>
                <tr>
                    <td class="w-60 text-center"><p class="mt-5  font-bold"><?php echo  $fout?></p></td>
                </tr>
            </form>
        </table>
    </div>
