<!--程式碼如下-->
<script src="./jq/jquery-2.1.0.js"></script>
<form id="form1" name="form1" method="post" action="">
<label>
<input type="text" name="textfield" />
</label>
<label>
<input type="button" name="Submit" value="送出" onclick="submited();" />
</label>
</form>

<script language="javascript">
function submited(){
$.ajax({
                                        type: "post",
                                        url: 'tw.yahoo.com',
                                        data: {
                                            alert('');
                                        },
                                        dataType: "text",
                                        success: function (msg) {
                                            
                                        }
                                    });


}               
function subm(){
form1.target="_blank";
form1.action="http://tw.yahoo.com";
form1.submit();
form1.target="_blank";
form1.action="http://www.104.com.tw";
form1.submit();
}
</script>

<iframe name="ifmSubmit" src="about:blank" width="0px" height="0px" border=0> 
</iframe>

