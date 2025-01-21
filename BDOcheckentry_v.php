<style type="text/css">
	@media print{
		#screenarea{
			display: none;
		}

		body{
			background: white;
		}

		.navbar{
			display: none;
		}
	}

	@media screen{
		#printarea{
			display: none;
		}

		tr:nth-child(even) {
		  background-color: #f2f2f2;
		}

		#trAccounts:hover{
			background-color: navy;
			color: white;
		}
	}
</style>
<div id="screenarea">
	<div class="card" style="cursor: default; background-color: transparent; border-color: transparent;">
		<div class="card-body">
			<div class="text-center" style="margin-bottom: 1em;">
				<img src="../bank/bdo.png" style="height: 50px;">
				<p style="font-size: 8pt; font-weight: bolder;">Transaction Entry</p>
			</div>
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<form id="frmInputs">
				        <input type="text" name="txtnmBank" id="inputnmBank" value="BDO" hidden>
						<div class="form-floating">
							<input type="number" name="txtCheckno" class="form-control" id="inputnmCheckno" placeholder="Check No." autocomplete="off" required>
							<label for="inputnmCheckno"><img src="../icons/pound.png"> Check No.</label>
						</div>
						<input type="text" name="txtnmCheckstatus" value="issued" hidden>
						<span id="prevCheckno" hidden></span>
						<div class="form-floating" hidden>
							<input type="text" name="txtnmAccountno" class="form-control" id="inputnmAccountno" placeholder="Account No" autocomplete="off" required style="background-color: #F2F2F2; color: navy; border-color: navy;">
							<label for="inputnmAccountno">Account No.</label>
							<table id="tblAccounts" style="display: none; width: 100%;">
								<tbody></tbody>
							</table>
						</div>
						<div class="form-floating">
							<input type="text" name="txtAccountname" class="form-control" id="inputnmAccountname" placeholder="Account Name" autocomplete="off" required>
							<label for="inputnmAccountname"><img src="../icons/user.png"> Account Name</label>
						</div>
						<div class="form-floating">
							<input type="text" name="txtAmount" class="form-control" id="inputnmAmount" placeholder="Amount" autocomplete="off">
							<label for="inputnmAmount"><img src="../icons/money.png"> Amount</label>
						</div>
						<div class="form-floating">
							<input type="date" name="txtCheckdate" class="form-control" id="inputnmCheckdate" placeholder="Check Date" autocomplete="off"  required>
							<label for="inputnmCheckdate"><img src="../icons/calendar.png"> Check Date</label>
						</div>
						<div id="divCheckdate" style="display: none;"></div>
						<div id="divBranch" style="display: none;"></div>
						<input type="text" id="Accountlengthcount" hidden>
					</form>
					<div class="row">
						<div class="col-md-6">
							<!-- <input type="color" class="form-control form-control-color" id="exampleColorInput" title="Choose your color"> -->
							<a href="BDOchecksummary" style="text-decoration: none;">
								<div class="d-grid gap-2">
								  <button class="btn btn-primary gap-2" id="btnProceedprint" style="font-size: 16pt; font-weight: bold;"><img src="../icons/archive.png"> ARCHIVE</button>
								</div>
							</a>
						</div>
						<div class="col-md-3 d-grid gap-2">
							<button class="btn btn-dark" style="font-size: 15pt; color: #b6d2f2;" id="btnSave"><img src="../icons/send.png"> SAVE</button>
						</div>
						<div class="col-md-3 d-grid gap-2">
							<button class="btn btn-warning gap-2" id="btnPrint" style="font-size: 16pt; font-weight: bold;"><img src="../icons/print.png"> PRINT</button>
						</div>
					</div>
				</div>
				<div class="col-md-3"></div>
			</div>
		</div>
	</div>
</div>
<div id="printarea">
	<table style="width: 100%;">
		<tbody>
			<tr style="height: 15pt;">
				<td></td>
				<td style="width: 33%; text-align: left; font-size: 10pt; font-family: Arial, Helvetica, sans-serif; font-weight: bold; letter-spacing: 7px;" id="cellnmCheckdate" colspan="3"></td>
			</tr>
		</tbody>
	</table>
	<table style="width: 100%;">
		<tbody>
			<tr style="height: 4pt;">
				<td style="width: 35pt;"></td>
				<td style="width: 48.74pt;"></td>
				<td style="width: 47.40pt;"></td>
				<td style="width: 47.50pt;"></td>
				<td style="width: 47.40pt;"></td>
				<td style="width: 47.40pt;"></td>
				<td style="width: 42.20;"></td>
				<td style="width: 74.4pt;"></td>
				<td style="width: 83.4pt;"></td>
			</tr>
			<tr style="height: 16.5pt;">
				<td style="width: 35pt;"></td>
				<td style="width: 30.74pt; font-family: Arial, Helvetica, sans-serif;" colspan="6" id="cellnmPayee"></td>
				<td style="width: 101.4pt; text-align: left; font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 12pt;" colspan="2" id="cellnmAmount"></td>
			</tr>
			<tr style="height: 6pt;">
				<td style="width: 35pt;"></td>
				<td style="width: 48.74pt;"></td>
				<td style="width: 47.40pt;"></td>
				<td style="width: 47.50pt;"></td>
				<td style="width: 47.40pt;"></td>
				<td style="width: 47.40pt;"></td>
				<td style="width: 42.20;"></td>
				<td style="width: 74.4pt;"></td>
				<td style="width: 83.4pt;"></td>
			</tr>
			<tr style="height: 15.75pt;">
				<td style="width: 35pt;"></td>
				<td style="width: 48.74pt; font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 9pt;" colspan="8" id="cellnmAmountnWords"></td>
			</tr>
			<tr style="height: 15pt;">
				<td style="width: 35pt;"></td>
				<td style="width: 48.74pt;"></td>
				<td style="width: 47.40pt;"></td>
				<td style="width: 47.50pt;"></td>
				<td style="width: 47.40pt;"></td>
				<td style="width: 47.40pt;"></td>
				<td style="width: 42.20;"></td>
				<td style="width: 74.4pt;"></td>
				<td style="width: 83.4pt;"></td>
			</tr>
			<tr style="height: 15pt;">
				<td style="width: 35pt;"></td>
				<td style="width: 48.74pt;"></td>
				<td style="width: 47.40pt;"></td>
				<td style="width: 47.50pt;"></td>
				<td style="width: 47.40pt;"></td>
				<td style="width: 47.40pt;"></td>
				<td style="width: 42.20;"></td>
				<td style="width: 83.4pt;"></td>
			</tr>
			<tr style="height: 15pt;">
				<td style="width: 35pt;"></td>
				<td style="width: 48.74pt;"></td>
				<td style="width: 47.40pt;"></td>
				<td style="width: 47.50pt;"></td>
				<td style="width: 47.40pt;"></td>
				<td style="width: 47.40pt;"></td>
				<td style="width: 42.20;"></td>
				<td style="width: 83.4pt;"></td>
			</tr>
			<tr style="height: 15pt;">
				<td style="width: 35pt;"></td>
				<td style="width: 48.74pt;"></td>
				<td style="width: 47.40pt;"></td>
				<td style="width: 47.50pt;"></td>
				<td style="width: 47.40pt;"></td>
				<td style="width: 47.40pt;"></td>
				<td style="width: 42.20;"></td>
				<td style="width: 83.4pt;"></td>
			</tr>
			<tr style="height: 15pt;">
				<td style="width: 35pt;"></td>
				<td style="width: 48.74pt;"></td>
				<td style="width: 47.40pt;"></td>
				<td style="width: 47.50pt;"></td>
				<td style="width: 47.40pt;"></td>
				<td style="width: 47.40pt;"></td>
				<td style="width: 42.20;"></td>
				<td style="width: 83.4pt;"></td>
			</tr>
			<tr style="height: 15pt;">
				<td style="width: 35pt;"></td>
				<td style="width: 48.74pt;"></td>
				<td style="width: 47.40pt;"></td>
				<td style="width: 47.50pt;"></td>
				<td style="width: 47.40pt;"></td>
				<td style="width: 47.40pt;"></td>
				<td style="width: 125.6pt;" style="text-align: left; font-family: Arial, Helvetica, sans-serif;" colspan="3"></td>
			</tr>
		</tbody>
	</table>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		getbank_v();
		function getbank_v(){
			$.ajax({
				type:'ajax',
				method:'POST',
				url:'<?php echo base_url("Checkentry/getbank_c"); ?>',
				data: $("#inputnmDepartment,#inputnmBank").serialize(),
				dataType:'json',
				success:function(response){
					if(response.success){
						var option = '';

						response.data.forEach(function(tbl){
							option += `<option value="${tbl['bank']}">${tbl['bank']}</option>`;
						})
						$("#inputnmBank").html(option);
					}else{
						alert("Please register a bank first.");
						location.replace("Bank");
					}
				}
			})
		}

		$("#inputnmAccountno").focus();
		$(document).on("keyup","#inputnmAmount",function(e){
	      e.preventDefault();
	      $(this).val(function(index, value) {
	            value = value.replace(/,/g,'');
	            return numberWithCommas(value);
	        });
	    })

	    function numberWithCommas(x){
	        var parts = x.toString().split(".");
	        parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
	        return parts.join(".");
	    }

	    $(document).on("click","#btnPrint",function(e){
	    	e.preventDefault();
	    	empty();
	    })

	    function empty(){
	    	var inputnmCheckno = $("#inputnmCheckno").val();
	    	var inputnmAccountno = $("#inputnmAccountno").val();
	    	var inputnmAccountname = $("#inputnmAccountname").val();
	    	var inputnmCheckdate = $("#inputnmCheckdate").val();
	    	var inputnmAmount = $("#inputnmAmount").val();

	    	if(inputnmCheckno==("")>0){
	    		alert("Please input empty field.");
	    		$("#inputnmCheckno").focus();
	    	}else if(inputnmAccountname==("")>0){
	    		alert("Please input empty field.");
	    		$("#inputnmAccountname").focus();
	    	}else if(inputnmCheckdate==("")>0){
	    		alert("Please input empty field.");
	    		$("#inputnmCheckdate").focus();
	    	}else if(inputnmAmount==("")>0){
	    		alert("Please input empty field.");
	    		$("#inputnmAmount").focus();
	    	}else{
	    		existcheckno_v();
	    	}
	    }

	    function existcheckno_v(){
			$.ajax({
				type:'ajax',
				method:'POST',
				url:'<?php echo base_url("Checkentry/existingcheckno_c"); ?>',
				data:$("#frmInputs").serialize(),
				dataType:'json',
				success:function(response){
					if(response.success){
						var inputnmCheckno = $("#inputnmCheckno").val();
						alert("Sorry, You cannot print because the Check No. "+inputnmCheckno+" is already exist, please proceed to check issuance page if you wish to print.");
					}else{
						checkdate_v();
					}
				}
			})
		}

	    function checkdate_v(){
	    	$.ajax({
	    		type:'ajax',
	    		method:'POST',
	    		url:'<?php echo base_url("Checkentry/checkdate_c"); ?>',
	    		data:$("#frmInputs").serialize(),
	    		dataType:'json',
	    		success:function(response){
	    			if(response.success){
	    				var div = '';

	    				response.data.forEach(function(tbl){
	    					div = `<input type="text" value="${tbl['dateinw']}" id="inputnmCheckdateinw">`;
	    				})
	    				$("#divCheckdate").html(div);
	    				var cvalue = $("#inputnmAccountname").val().length;
						var count = $("#Accountlengthcount").val(cvalue);
	    				countchar();
	    			}
	    		}
	    	})
	    }

	    function countchar(){
			var count = $("#Accountlengthcount").val();
			if(count==="91"){
				$("#cellnmPayee").css("font-size","8pt");
				getbranch_v();
			}else{
				getbranch_v();
			}
		}

	    function getbranch_v(){
	    	$.ajax({
	    		type:'ajax',
	    		method:'POST',
	    		url:'<?php echo base_url("Checkentry/getbranch_c"); ?>',
	    		data:$("#frmInputs").serialize(),
	    		dataType:'json',
	    		success:function(response){
	    			if(response.success){
	    				var div = '';

	    				response.data.forEach(function(tbl){
	    					div += `<input type="text" value="${tbl['branch']}" name="txtBranch">`;
	    				})

	    				$("#divBranch").html(div);
	    				insert_v();
	    			}
	    		}
	    	})
	    }

	    function insert_v(){
	    	$.ajax({
	    		type:'ajax',
	    		method:'POST',
	    		url:'<?php echo base_url("Checkentry/insert_c"); ?>',
	    		data:$("#frmInputs,#inputnmDepartment,#inputnmFullname").serialize(),
	    		dataType:'json',
	    		success:function(response){
	    			if(response.success){
	    				exactamount_v();
	    			}else{
	    				alert("Failed to Save Transaction");
	    			}
	    		}
	    	})
	    }

	    function exactamount_v(){
	    	$.ajax({
	    		type:'ajax',
	    		method:'POST',
	    		url:'<?php echo base_url("Checkentry/exactamount_c"); ?>',
	    		data:$("#frmInputs").serialize(),
	    		dataType:'json',
	    		success:function(response){
	    			if(response.success){
	    				exactmountinwords();
	    				clearinputs();
	    			}else{
	    				amountinwordswithcents();
	    				clearinputs();
	    			}
	    		}
	    	})
	    }

	    function exactmountinwords(){
			var number = parseFloat($("#inputnmAmount").val().replace(/[\, ]/g, ''));
			var Inwords = toWordsconver(number);
			var inputnmAmount = $("#inputnmAmount").val();
			var inputnmAccountname = $("#inputnmAccountname").val();
			var inputnmCheckdateinw = $("#inputnmCheckdateinw").val();
			$("#cellnmCheckdate").text(inputnmCheckdateinw).css("letter-spacing","5px");
			$("#cellnmPayee").text(inputnmAccountname);
			$("#cellnmAmount").text(inputnmAmount);
			$("#cellnmAmountnWords").text(Inwords+ "ONLY");
			print();
		}

		function amountinwordswithcents(){
			var number = $("#inputnmAmount").val();
			var Inwords = toWordsconver(number);
			var inputnmAmount = $("#inputnmAmount").val();
			var inputnmAccountname = $("#inputnmAccountname").val();
			var inputnmCheckdateinw = $("#inputnmCheckdateinw").val();
			$("#cellnmCheckdate").text(inputnmCheckdateinw).css("letter-spacing","5px");
			$("#cellnmPayee").text(inputnmAccountname);
			$("#cellnmAmount").text(inputnmAmount);
			$("#cellnmAmountnWords").text(Inwords+ "/100 ONLY");
			print();
		}

		function clearinputs(){
			$("#inputnmCheckno").val("");
			$("#inputnmAccountno").val("");
			$("#inputnmAccountname").val("");
			$("#inputnmAmount").val("");
			getlastCheckno_c();
			$("#inputnmAccountno").focus();
		}

		$("#btnSave").click(function(e){
			e.preventDefault();

			emptysave();
		})

		function emptysave(){
	    	var inputnmCheckno = $("#inputnmCheckno").val();
	    	var inputnmAccountno = $("#inputnmAccountno").val();
	    	var inputnmAccountname = $("#inputnmAccountname").val();
	    	var inputnmCheckdate = $("#inputnmCheckdate").val();
	    	var inputnmAmount = $("#inputnmAmount").val();

	    	if(inputnmCheckno==("")>0){
	    		alert("Please input empty field.");
	    		$("#inputnmCheckno").focus();
	    	}else if(inputnmAccountname==("")>0){
	    		alert("Please input empty field.");
	    		$("#inputnmAccountname").focus();
	    	}else if(inputnmCheckdate==("")>0){
	    		alert("Please input empty field.");
	    		$("#inputnmCheckdate").focus();
	    	}else if(inputnmAmount==("")>0){
	    		alert("Please input empty field.");
	    		$("#inputnmAmount").focus();
	    	}else{
	    		existchecknosave_v();
	    	}
	    }

	    function existchecknosave_v(){
			$.ajax({
				type:'ajax',
				method:'POST',
				url:'<?php echo base_url("Checkentry/existingcheckno_c"); ?>',
				data:$("#frmInputs").serialize(),
				dataType:'json',
				success:function(response){
					if(response.success){
						var inputnmCheckno = $("#inputnmCheckno").val();
						alert("Sorry, You cannot print because the Check No. "+inputnmCheckno+" is already exist, please proceed to check issuance page if you wish to print.");
					}else{
						getbranchsave_v();
					}
				}
			})
		}

		function getbranchsave_v(){
	    	$.ajax({
	    		type:'ajax',
	    		method:'POST',
	    		url:'<?php echo base_url("Checkentry/getbranch_c"); ?>',
	    		data:$("#frmInputs").serialize(),
	    		dataType:'json',
	    		success:function(response){
	    			if(response.success){
	    				var div = '';

	    				response.data.forEach(function(tbl){
	    					div += `<input type="text" value="${tbl['branch']}" name="txtBranch">`;
	    				})

	    				$("#divBranch").html(div);
	    				insertsave_v();
	    			}
	    		}
	    	})
	    }

	    function insertsave_v(){
	    	$.ajax({
	    		type:'ajax',
	    		method:'POST',
	    		url:'<?php echo base_url("Checkentry/insert_c"); ?>',
	    		data:$("#frmInputs,#inputnmDepartment,#inputnmFullname").serialize(),
	    		dataType:'json',
	    		success:function(response){
	    			if(response.success){
	    				alert("Successfully Saved.");
	    				clearinputs();
	    			}else{
	    				alert("Failed to Save Transaction");
	    			}
	    		}
	    	})
	    }

	    $(document).on("keyup","#inputnmAccountno",function(e){
		    	e.preventDefault();
		    	var inputnmAccountno = $("#inputnmAccountno").val();

		    	if(inputnmAccountno==("")>0){
		    		$("#tblAccounts").fadeOut(500);
		    	}else{
		    		viewAccountno_v();
		    	}
		    	
		    })

		    function viewAccountno_v(){
		    	$.ajax({
		    		type:'ajax',
		    		method:'POST',
		    		url:'<?php echo base_url("Checkentry/viewAccountno_c"); ?>',
		    		data:$("#inputnmAccountno,#inputnmBank").serialize(),
		    		dataType:'json',
		    		success:function(response){
		    			if(response.success){
		    				var tbody = '';

		    				response.data.forEach(function(dbdata){
		    					tbody += `
		    						<tr style="font-size: 16pt;" id="trAccounts" data-accountno='${dbdata['accountno']}' data-accountname='${dbdata['accountname']}'>
										<td style="width: 15%;">${dbdata['accountno']}</td>
										<td style="width: 75%;">${dbdata['accountname']}</td>
										<td style="text-align: right; width: 10%;"><i class="fa-solid fa-circle fa-fade" style="color: #0fac0c;"></i></td>
									</tr>
		    					`;
		    				})
		    				$("#tblAccounts").html(tbody);
		    				$("#tblAccounts").fadeIn(500);
		    			}else{
		    				$("#tblAccounts").fadeOut(500);
		    			}
		    		}
		    	})
		    }

		    $(document).on("click","#trAccounts",function(e){
		    	e.preventDefault();
		    	$("#inputnmAccountno").val($(this).attr("data-accountno"));
		    	$("#inputnmAccountname").val($(this).attr("data-accountname"));
		    	$("#tblAccounts").fadeOut(500);
		    	$("#inputnmAmount").focus();
		    })

		    getlastCheckno_c();
		    function getlastCheckno_c(){
		    	$.ajax({
		    		type:'ajax',
		    		method:'POST',
		    		url:'<?php echo base_url("Checkentry/getlastCheckno_c"); ?>',
		    		data:$("#inputnmBank").serialize(),
		    		dataType:'json',
		    		success:function(response){
		    			if(response.success){
		    				var span = '';

		    				response.data.forEach(function(checkcounter){
		    					span += `
		    						<input type="text" name="txtnmPrevcheckno" id="inputnmPrevcheckno" value="${checkcounter['checkno']}" class="form-control">
		    					`;
		    				})
		    				$("#prevCheckno").html(span);
		    				var inputnmPrevcheckno = $("#inputnmPrevcheckno").val();
							$("#inputnmCheckno").val(inputnmPrevcheckno+++1);
							$("#inputnmAccountname").focus();
		    			}
		    		}
		    	})
		    }

		// System for American Numbering 
		var th_val = ['', 'THOUSAND', 'MILLION', 'BILLION', 'TRILLION'];
		// System for uncomment this line for Number of English 
		// var th_val = ['','thousand','million', 'milliard','billion'];
		// var cents = ['','1','2','3','4','5','6','7','8','9'];
		 
		var dg_val = ['ZERO', 'ONE', 'TWO', 'THREE', 'FOUR', 'FIVE', 'SIX', 'SEVEN', 'EIGHT', 'NINE'];
		var tn_val = ['TEN', 'ELEVEN', 'TWELVE', 'THIRTEEN', 'FOURTEEN', 'FIFTEEN', 'SIXTEEN', 'SEVENTEEN', 'EIGHTEEN', 'NINETEEN'];
		var tw_val = ['TWENTY', 'THIRTY', 'FORTY', 'FIFTY', 'SIXTY', 'SEVENTY', 'EIGHTY', 'NINETY'];
		var cents = ['0','1','2','3','4','5','6','7','8','9'];
		function toWordsconver(s) {
		  s = s.toString();
		    s = s.replace(/[\, ]/g, '');
		    if (s != parseFloat(s))
		        return 'not a number ';
		    var x_val = s.indexOf('.');
		    if (x_val == -1)
		        x_val = s.length;
		    if (x_val > 15)
		        return 'too big';
		    var n_val = s.split('');
		    var str_val = '';
		    var sk_val = 0;
		    for (var i = 0; i < x_val; i++) {
		        if ((x_val - i) % 3 == 2) {
		            if (n_val[i] == '1') {
		                str_val += tn_val[Number(n_val[i + 1])] + ' ';
		                i++;
		                sk_val = 1;
		            } else if (n_val[i] != 0) {
		                str_val += tw_val[n_val[i] - 2] + ' ';
		                sk_val = 1;
		            }
		        } else if (n_val[i] != 0) {
		            str_val += dg_val[n_val[i]] + ' ';
		            if ((x_val - i) % 3 == 0)
		                str_val += 'HUNDRED ';
		            sk_val = 1;
		        }
		        if ((x_val - i) % 3 == 1) {
		            if (sk_val)
		                str_val += th_val[(x_val - i - 1) / 3] + ' ';
		            sk_val = 0;
		        }
		    }
		    if (x_val != s.length) {
		        var y_val = s.length;
		        str_val += '& ';
		        for (var i = x_val + 1; i < y_val; i++)
		        str_val += cents[n_val[i]] + '';  
		    }

		    return str_val.replace(/\s+/g, ' ');
		}

	})
</script>