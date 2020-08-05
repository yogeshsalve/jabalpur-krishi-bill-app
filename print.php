<!-- CODE TO INSERT ITO DATABASE -->
<?php
include 'db.php';

if(isset($_POST['print'])){

    $from =  $_POST['from'];
    $to = $_POST['to'];
	//connect to the database
	$mysqli = NEW MySQLi("localhost", "root", "", "jabalpur-agri-bill");

	
}
    
   
    $connect = mysqli_connect("localhost", "root", "", "jabalpur-agri-bill");
    
    if ($connect->connect_error) {
        die("Connection failed: " . $connect->connect_error);
        }

    $query = "INSERT into actions (action) values(Printed $from to $to)";

?>
<!-- CODE TO INSERT ITO DATABASE ENDS -->






<!-- CODE TO PRINT BELOW -->
<?php


if(isset($_POST['print'])){

    $from =  $_POST['from'];
    $to = $_POST['to'];
	//connect to the database
	$mysqli = NEW MySQLi("localhost", "root", "", "jabalpur-agri-bill");

	
}
    
   
    $connect = mysqli_connect("localhost", "root", "", "jabalpur-agri-bill");
    
    if ($connect->connect_error) {
        die("Connection failed: " . $connect->connect_error);
        }

 
   
 $query = "SELECT REGION,CIRCLEN,DIVISION,DC_NAME,GROUPN,READER,CONS_NUM,BILL_MONTH,BILL_DATE,
CONS_NAME_H_1,CONS_ADDR_1,CONS_ADDR2,ARREAR_FLAG,OLD_CONS_NO,CHQ_DATE,DUE_DATE,CONS_ADDR3,
LOC_ADDR,OFFICER_NAME,OFFICER_PHONE,PHASE_N,SD_HELD,CONN_LOAD,LOAD_UNIT,TRF_CATG,MTR_PHASE,MOBILE,
ERC_AMT,GOVT_SUBSIDY,CONS_PAYBLE,LTCS_WTSC,BAL_FRZ_ARREAR,PREV_BILL_DUES,PEND_SURCHRG,FRZ_ARR_INST,
OTHER_DUES,NET_PAYABLE,TOTAL_SUBSIDY,CONS_NAME,CONS_ADDR1,LOC_CD,TOT_GOVT_SHARE,AADHAAR_NO,OLD_GR_NO,
OLD_RD_NO,BILL_SR_NO,OLD_SUBSIDY,ADDL_SUBSIDY,ENCH_FCA,FIXED_CHARGE,AREA_TYPE, QRCODE,DUMMY1,DUMMY2,DUMMY3,DUMMY4,DUMMY5,
DUMMY6,DUMMY7,DUMMY8,DUMMY9,DUMMY10,DUMMY11,DUMMY12,DUMMY13,DUMMY14,DUMMY15,DUMMY16,DUMMY17,DUMMY18,DUMMY19,
DUMMY20,DUMMY21,DUMMY22,DUMMY23,DUMMY24,DUMMY25,DUMMY26,DUMMY27,DUMMY28,DUMMY29,DUMMY30,DUMMY31,DUMMY32,
DUMMY33,DUMMY34,DUMMY35,DUMMY36,DUMMY37,DUMMY38,DUMMY39,DUMMY40,DUMMY41,DUMMY42,DUMMY43,DUMMY44,DUMMY45,
DUMMY46,DUMMY47,DUMMY48,DUMMY49,CONS_NAME_H_2,DUMMY50,DUMMY51,DUMMY52 FROM agribill where id between $from and $to"; 


 // WHERE ivrs like '%".$ivrs."%'";
         
    $result = mysqli_query($connect, $query);

 
    if(mysqli_num_rows($result) > 0)
    {

        ?>

            <html>
                    <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <meta http-equiv="X-UA-Compatible" content="ie=edge">
                    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                    <title>JBL ELECTRICITY BILL APP</title>

                    </head>
                         <style> 
                          table{ 
                          border-collapse: collapse;
                          border-spacing: 0 1px; 
                          width: 191mm;
                          height: 288mm;
                          align: center;
						  
                          } 
                          td{
                            border:1px solid white;
                            padding: 2px; 							
                          }
                    </style>
                    <style>
                        @media print {
                        form {page-break-after: always;}
                        }
                    </style>
                    <body>  
          <?php      
       
       
       for($i=0;$i<mysqli_num_rows($result);$i++)
        {
                   
        
                while ($row = mysqli_fetch_array($result))
                {

                    $REGION = $row[0];
                    $CIRCLEN = $row[1]; 
                    $DIVISION = $row[2];
                    $DC_NAME = $row[3];
                    $GROUPN = $row[4];
                    $READER = $row[5];
                    $CONS_NUM = $row[6];
                    $BILL_MONTH = $row[7];
                    $BILL_DATE = $row[8];
                    $CONS_NAME_H_1 = $row[9];
                    $CONS_ADDR_1 = $row[10];
                    $CONS_ADDR2 = $row[11];
                    $ARREAR_FLAG = $row[12];
                    $OLD_CONS_NO = $row[13];
                    $CHQ_DATE = $row[14];
                    $DUE_DATE = $row[15];
                    $CONS_ADDR3 = $row[16];
                    $LOC_ADDR = $row[17];
                    $OFFICER_NAME = $row[18];
                    $OFFICER_PHONE = $row[19];
                    $PHASE_N = $row[20];
                    $SD_HELD = $row[21];
                    $CONN_LOAD = $row[22];
                    $LOAD_UNIT = $row[23];
                    $TRF_CATG = $row[24];
                    $MTR_PHASE = $row[25];
                    $MOBILE = $row[26];
                    $ERC_AMT = $row[27];
                    $GOVT_SUBSIDY = $row[28];
                    $CONS_PAYBLE = $row[29];
                    $LTCS_WTSC = $row[30];
                    $BAL_FRZ_ARREAR = $row[31];
                    $PREV_BILL_DUES = $row[32];
                    $PEND_SURCHRG = $row[33];
                    $FRZ_ARR_INST = $row[34];
                    $OTHER_DUES = $row[35];
                    $NET_PAYABLE = $row[36];
                    $TOTAL_SUBSIDY = $row[37];
                    $CONS_NAME = $row[38];
                    $CONS_ADDR1 = $row[39];
                    $LOC_CD = $row[40];
                    $TOT_GOVT_SHARE = $row[41];
                    $AADHAAR_NO = $row[42];
                    $OLD_GR_NO = $row[43];
                    $OLD_RD_NO = $row[44];
                    $BILL_SR_NO = $row[45];
                    $OLD_SUBSIDY = $row[46];
                    $ADDL_SUBSIDY = $row[47];
                    $ENCH_FCA = $row[48];
                    $FIXED_CHARGE = $row[49];
                    $AREA_TYPE = $row[50];
                    $QRCODE = $row[51];
                    $DUMMY1 = $row[52];
                    $DUMMY2 = $row[53];
                    $DUMMY3 = $row[54];
                    $DUMMY4 = $row[55];
                    $DUMMY5 = $row[56];
                    $DUMMY6 = $row[57];
                    $DUMMY7 = $row[58];
                    $DUMMY8 = $row[59];
                    $DUMMY9 = $row[60];
                    $DUMMY10 = $row[61];
                    $DUMMY11 = $row[62];
                    $DUMMY12 = $row[63];
                    $DUMMY13 = $row[64];
                    $DUMMY14 = $row[65];
                    $DUMMY15 = $row[66];
                    $DUMMY16 = $row[67];
                    $DUMMY17 = $row[68];
                    $DUMMY18 = $row[69];
                    $DUMMY19 = $row[70];
                    $DUMMY20 = $row[71];
                    $DUMMY21 = $row[72];
                    $DUMMY22 = $row[73];
                    $DUMMY23 = $row[74];
                    $DUMMY24 = $row[75];
                    $DUMMY25 = $row[76];
                    $DUMMY26 = $row[77];
                    $DUMMY27 = $row[78];
                    $DUMMY28 = $row[79];
                    $DUMMY29 = $row[80];
                    $DUMMY30 = $row[81];
                    $DUMMY31 = $row[82];
                    $DUMMY32 = $row[83];
                    $DUMMY33 = $row[84];
                    $DUMMY34 = $row[85];
                    $DUMMY35 = $row[86];
                    $DUMMY36 = $row[87];
                    $DUMMY37 = $row[88];
                    $DUMMY38 = $row[89];
                    $DUMMY39 = $row[90];
                    $DUMMY40 = $row[91];
                    $DUMMY41 = $row[92];
                    $DUMMY42 = $row[93];
                    $DUMMY43 = $row[94];
                    $DUMMY44 = $row[95];
                    $DUMMY45 = $row[96];
                    $DUMMY46 = $row[97];
                    $DUMMY47 = $row[98];
                    $DUMMY48 = $row[99];
                    $DUMMY49 = $row[100];
                    $CONS_NAME_H_2 = $row[101];
                    $DUMMY50 = $row[102];
                    $DUMMY51 = $row[103];
                    $DUMMY52 = $row[104];
                                 


                ?>
             
                <form action="" method="POST" id="myfrm"> 
                <table align="center" style="width:191mm;">
                <tr style="height:12mm;"><td colspan="3"><font size="1"></font></td></tr>



                <!-- <table align="center" style="width:191mm;">    -->
                <tr style="height:6.50mm;">
                    <td style="width:44mm;"><font size="1"></font></td>
                    <td align="center" style="width:62mm;"><font size="2"><b>&nbsp;<?php echo $LOC_CD."-".$OLD_GR_NO."-".$OLD_RD_NO."-".$OLD_CONS_NO;?></b></font></td>
                    <td align="center"style="width:85mm;"><font size="2"><b>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $CONS_NUM;?></b></font></td>
                </tr>

                <tr style="height:6.00mm;">
                    <td  align="center" style="width:44mm;"><font size="2"><b><?php echo $CONS_NAME_H_1;?></b></font></td>
                    <td align="center" style="width:62mm;"><font size="2"><b><?php echo $CONN_LOAD;?> <?php echo $LOAD_UNIT;?></b></font></td>
                    <td align="center" style="width:85mm;"><font size="2"><b><?php echo $LOC_CD;?></b></font></td>
                </tr>

                <tr style="height:6.00mm;">
                    <td align="center" style="width:44mm;"><font size="2"><b><?php echo $CONS_ADDR_1;?></b></font></td>
                    <td align="center" style="width:62mm;"><font size="2"><b><?php echo $TRF_CATG;?></b></font></td>
                    <td align="center" style="width:85mm;"><font size="2"><b><?php echo $DIVISION;?></b></font></td>
                </tr>

                <tr style="height:6.00mm;">
                    <td align="center" style="width:44mm;"><font size="2"><b><?php echo $MOBILE;?></b></font></td>
                    <td align="center" style="width:62mm;"><font size="2"><b><?php echo $SD_HELD;?></b></font></td>
                    <td align="center" style="width:85mm;"><font size="2"><b><?php echo $BILL_DATE;?></b></font></td>
                </tr>

                <tr style="height:6.00mm;">
                    <td style="width:44mm;"><font size="1"></font></td>
                    <td align="center" style="width:62mm;"><font size="2"><b><?php echo $DC_NAME;?></b></font></td>
                    <td align="center" style="width:85mm;"><font size="2"><b>. &nbsp;<?php echo $OFFICER_PHONE;?></b></font></td>
                </tr>

                <tr style="height:5.50mm;">
                    <td align="center" style="width:44mm;"><font size="2"><b></b></font></td>
                    <td align="center" style="width:82mm;"><font size="2"><b>. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $OFFICER_NAME;?></b></font></td>
                    <td align="center" style="width:65mm;"><font size="2"><b>. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $AADHAAR_NO;?></b></font></td>
                </tr>

                <tr style="height:6.5mm;">
                    <td style="width:44mm;"><font size="1"></font></td>
                    <td align="center" style="width:62mm;"><font size="2"><b><?php echo $PHASE_N;?></b></font></td>
                    <td style="width:85mm;"><font size="1">.</font></td>
                </tr>
                <!-- </table> -->













               <!--  <table align="center" style="width:191mm;"> -->
                <tr style="height:5.5mm;">
                    
                    <td COLSPAN="3" align="center"><font size="2"><b><?php echo $BILL_MONTH;?></b></font></td>
                    
                </tr>
                <tr style="height:6.5mm;">
                    <td COLSPAN="3" align="center"><font size="2"></font></td> <!-- vivran -->
                </tr>

                <tr style="height:6.5mm;">
                    <td style="width:84mm;"><font size="1"></font></td>
                    <td align="center" COLSPAN="2"style="width:58mm;"><font size="2"><b><?php echo $ERC_AMT - $LTCS_WTSC;?></b></font></td>
                    
                </tr>
                <tr style="height:6.5mm;">
                    <td style="width:84mm;"><font size="1"></font></td>
                    <td align="center" COLSPAN="2"style="width:58mm;"><font size="2"><b><?php echo $OLD_SUBSIDY;?></b></font></td>
                    
                </tr>
                <tr style="height:6.5mm;">
                    <td style="width:84mm;"><font size="1"></font></td>
                    <td align="center" COLSPAN="2"style="width:58mm;"><font size="2"><b><?php echo $ADDL_SUBSIDY;?></b></font></td>
                    
                </tr>
                <tr style="height:6.5mm;">
                    <td style="width:84mm;"><font size="1"></font></td>
                    <td align="center" COLSPAN="2"style="width:58mm;"><font size="2"><b><?php echo $LTCS_WTSC;?></b></font></td>
                    
                </tr>
                <tr style="height:6.5mm;">
                    <td style="width:84mm;"><font size="1"></font></td>
                    <td align="center" COLSPAN="2"style="width:58mm;"><font size="2"><b><?php echo $CONS_PAYBLE;?></b></font></td>
                    
                </tr>
               <tr style="height:5mm;">
                    <td align="center" COLSPAN="3"style="width:58mm;"><font size="2"></font></td>
                </tr>
                 <tr style="height:5.5mm;">
                    <td><font size="1"></font></td>
                    <td><font size="1"></font></td>
                    <td align="center" style="width:68mm;"><font size="2"><b><?php echo $BILL_MONTH;?></b></font></td>
                    
                </tr>
               <tr style="height:6.5mm;">
                    <td style="width:84mm;"><font size="1"></font></td>
                    <td align="center" COLSPAN="3"style="width:58mm;"><font size="2"><?php echo $PREV_BILL_DUES;?></b></font></td>
                    
                </tr>
               <tr style="height:6.5mm;">
                    <td style="width:84mm;"><font size="1"></font></td>
                    <td align="center" COLSPAN="3"style="width:58mm;"><font size="2"><b><?php echo $CONS_PAYBLE/2;?></b></font></td>
                    
                </tr>
               <tr style="height:6.5mm;">
                    <td style="width:84mm;"><font size="1"></font></td>
                    <td align="center" COLSPAN="2"style="width:58mm;"><font size="2"><b><?php echo $PEND_SURCHRG;?></b></font></td>
                    
                </tr>
                <tr style="height:6.5mm;">
                    <td style="width:84mm;"><font size="1"></font></td>
                    <td align="center" COLSPAN="2"style="width:58mm;"><font size="2"><b><?php echo $PREV_BILL_DUES+($CONS_PAYBLE/2)+$PEND_SURCHRG;?></b></font></td>
                    
                </tr>
                <tr style="height:6.5mm;">
                    <td style="width:84mm;"><font size="1"></font></td>
                    <td align="center" COLSPAN="2"style="width:58mm;"><font size="2"><b><?php echo $DUE_DATE;?></b></font></td>
                    
                </tr>
               <!--  </table> -->






                
                <!-- <table style="width:191mm;">    -->
                <tr style="height:6.0mm;"><td colspan="3"><font size="1"></font></td></tr>
                <tr style="height:6.5mm;"><td colspan="3"><font size="1"></font></td></tr>
                
				
               <tr style="height:6.0mm;"><td colspan="2"><font size="1"><b>. &nbsp;&nbsp;&nbsp;&nbsp;"इंदिरा किसान ज्योति योजना" के हितग्राहियों का कृषि पंप का विद्युत देयक पूर्व की तुलना में आधा कर</b></font></td></tr>
                <tr style="height:6.0mm;"><td colspan="2"><font size="1"><b>. &nbsp;&nbsp;&nbsp;&nbsp; दिया गया है | फ्लेट रेट कृषि पंप संयोजन पर मात्र रु. ७०० प्रति हॉर्स पावर प्रतिवर्ष देय है |</b></font></td></tr>
               
				
				<tr style="height:6.5mm;"><td colspan="3"><font size="1"></font></td></tr>
                <tr style="height:6.5mm;"><td colspan="3"><font size="1"></font></td></tr>
                <tr style="height:6.5mm;"><td colspan="3"><font size="1"></font></td></tr>
                <tr style="height:6.5mm;"><td colspan="3"><font size="1"></font></td></tr>
                <tr style="height:6.5mm;"><td colspan="3"><font size="1"></font></td></tr>
                <tr style="height:6.5mm;"><td colspan="3"><font size="1"></font></td></tr>
                <tr style="height:6.5mm;"><td colspan="3"><font size="1"></font></td></tr>
                <tr style="height:6.5mm;"><td colspan="3"><font size="1"></font></td></tr>
                <tr style="height:6.5mm;"><td colspan="3"><font size="1"></font></td></tr>
                <tr style="height:6.5mm;"><td colspan="3"><font size="1"></font></td></tr>
                <tr style="height:6.0mm;"><td colspan="3"><font size="1"></font></td></tr>
                <!-- </table> -->

                <!-- <table style="width:191mm;">    -->
                  </tr>
                   <tr style="height:5.0mm;">
                    <td style="width:68mm;"><font size="1"></font></td>
                    <td style="width:68mm;"><font size="1"></font></td>
                    <td style="width:55mm;"><font size="1"></font></td>
                </tr>

               <tr style="height:6.5mm;">
                    <td align="center" style="width:68mm;"><font size="2"><b>6 MONTH</b></font></td>
                    <td align="center" style="width:68mm;"><font size="2"><b>. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $DC_NAME;?></b></font></td>
                    <td style="width:55mm;"><font size="1">.</font></td>
                </tr>
                   <tr style="height:6.5mm;">
                    <td align="center" style="width:68mm;"><font size="2"><b>. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $CONS_NUM;?></b></font></td>
                    <td style="width:68mm;"><font size="1"></font></td>
                    <td style="width:55mm;"><font size="1"></font></td>
                </tr>
                   <tr style="height:6.5mm;">
                    <td align="center"style="width:78mm;"><font size="2"><b>. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $CONS_NAME_H_1;?></b></font></td>
                    <td align="center" style="width:58mm;"><font size="2"><b><?php echo $PREV_BILL_DUES+($CONS_PAYBLE/2)+$PEND_SURCHRG;?></b></font></td>
                    <td style="width:55mm;"><font size="1"></font></td>
                </table>
    
                

                </form>
                               

            <?php
                }
                        
                           
            ?>

<?php
   }
    }
?>

</body>
                </html>
<script>
    console.log("calling print")
    myFunction();
    console.log("calling print end")
function myFunction() {
  // document.getElementById("fetchDetails").style["display"]="none";
  window.print();
  // setTimeout(function(){ 
  //   document.getElementById("fetchDetails").style["display"]="block";
  //    }, 5000);
      }

</script>