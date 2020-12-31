<?php 
	$plans = $this->db->order_by('id','asc')->get_where('plans')->result_array();
?>

<div class="page-content">
	<img src="<?= base_url('assets/images/member_profile.png') ?>" style="width: 100%;">

	<div class="card card-style mt-3 mb-3">
        <div class="content">
            <h1 class="mb-1">Q1: How much can I earn?</h1>
            <p class="mt-1 mb-2">
                The monthly income of PLAN 6 is 330 times that of PLAN 1 !
            </p>
            <div class="d-flex mb-0" style="overflow: scroll;">
                <table class="table table-bordered table-k">
                	<tr>
                		<th>Membership Level</th>
                		<th>Number of Tasks</th>
                		<th>Single Commission</th>
                		<th>Daily Income</th>
                		<th>Monthly Income</th>
                		<th>Annual Income</th>
                	</tr>
                	<?php foreach ($plans as $key => $value) { ?>
                		<tr>
	                		<td><?= $value['name'] ?></td>
	                		<td class="color-red-light"><?= $value['task'] ?></td>
	                		<td class="color-red-light"><?= $value['single_commission'] ?></td>
	                		<td class="color-red-light"><?= $value['daily_income'] ?></td>
	                		<td class="color-red-light"><?= $value['monthly_income'] ?></td>
	                		<td class="color-red-light"><?= $value['anual_income'] ?></td>
	                	</tr>
                	<?php } ?>
                </table>
            </div>
            <p class="mt-1 mb-2 color-red-light" style="line-height: 1;">
                E.g: <br>PLAN 5 is opened for 30 days, the daily income is 720, and the total income is 21,600. It only takes 18 days to pay back. The tasks after the period are pure income.
            </p>
        </div>
    </div>

    <div class="card card-style mb-3">
        <div class="content">
            <h1 class="mb-1">Q2: Can I get more ?</h1>
            <p class="mt-1 mb-1" style="line-height: 1.5;">
                Of course! in addition to making money by yourself at Social Promote, you can also invite your friends to make money together. Friends can use your invitation code to register and activate members and complete tasks. You will enjoy the corresponding commission income privileges of the three-level distribution. 
            </p>
            <p class="mt-1 mb-2" style="font-weight: bold; color: #000;">Recommend subordinate t do tasks</p>
            <div class="d-flex mb-0" style="overflow: scroll;">
                <table class="table table-bordered table-k">
                	<tr>
                		<th>Agent level</th>
                		<th>Income ratio</th>
                		<th>Per 5,000 revenue</th>
                	</tr>
            		<tr>
                		<td>Gen 1</td>
                		<td class="color-red-light">5%</td>
                		<td class="color-red-light">250</td>
                	</tr>
                	<tr>
                		<td>Gen 2</td>
                		<td class="color-red-light">2%</td>
                		<td class="color-red-light">100</td>
                	</tr>
                	<tr>
                		<td>Gen 3</td>
                		<td class="color-red-light">1%</td>
                		<td class="color-red-light">50</td>
                	</tr>
                </table>
            </div>
            <p class="mt-1 mb-2 color-black" style="line-height: 1; font-weight: bold;">
                Open the superior agency mode, and the commission income is easy to earn to earn non-stop;
            </p>
            <p class="mt-1 mb-2 color-black" style="line-height: 1;">
                Each subordinate you invite completes the like, you will get commission.
            </p>
            <p class="mt-1 mb-2 color-black" style="line-height: 1;">
                E.g: <br><br>
				There are 10 first-level users, 100 second-level users, and 1,000 third-level users. The daily mission income per person is 5,000 You can imagine your daily passive income.
            </p>
            <p class="mt-1 mb-2 color-black" style="line-height: 1;">
                Level 1 user : 5,000*10*5% = 2,500
            </p>
            <p class="mt-1 mb-2 color-black" style="line-height: 1;">
                Level 2 user : 5,000*100*2% = 10,000
            </p>
            <p class="mt-1 mb-2 color-black" style="line-height: 1;">
                Level 3 user : 5,000*1,000*1% = 50,000
            </p>
            <p class="mt-1 mb-2 color-black" style="line-height: 1;">
                The passive income from the lower level rebate on the day is: 2,500+10,000+50,000=62,500
            </p>
        </div>
    </div>

    <div class="card card-style">
        <div class="content">
            <h1 class="mb-1">Q3: Social Promote Investment income analysis </h1>
            <div class="d-flex mb-0" style="overflow: scroll;">
                <table class="table table-bordered table-k">
                	<tr>
                		<th colspan="2">Membership Level</th>
                		<th>Investment amount</th>
                		<th>Daily order</th>
                		<th>Commission per order</th>
                		<th>Daily income</th>
                		<th>Total revenue</th>
                	</tr>
            		<tr>
                		<td>1 day</td>
                		<td class="color-red-light">PLAN 1</td>
                		<td class="color-red-light">0</td>
                		<td class="color-red-light">2</td>
                		<td class="color-red-light">12</td>
                		<td class="color-red-light">24</td>
                		<td class="color-red-light">24</td>
                	</tr>
                	<tr>
                		<td rowspan="5">30 days</td>
                		<td class="color-red-light">PLAN 2</td>
                		<td class="color-red-light">1,300</td>
                		<td class="color-red-light">4</td>
                		<td class="color-red-light">15</td>
                		<td class="color-red-light">60</td>
                		<td class="color-red-light">1,800</td>
                	</tr>
                	<tr>
                		<td class="color-red-light">PLAN 3</td>
                		<td class="color-red-light">3,000</td>
                		<td class="color-red-light">10</td>
                		<td class="color-red-light">16</td>
                		<td class="color-red-light">160</td>
                		<td class="color-red-light">4,800</td>
                	</tr>
                	<tr>
                		<td class="color-red-light">PLAN 4</td>
                		<td class="color-red-light">6,000</td>
                		<td class="color-red-light">20</td>
                		<td class="color-red-light">17</td>
                		<td class="color-red-light">340</td>
                		<td class="color-red-light">10,200</td>
                	</tr>
                	<tr>
                		<td class="color-red-light">PLAN 5</td>
                		<td class="color-red-light">12,000</td>
                		<td class="color-red-light">40</td>
                		<td class="color-red-light">18</td>
                		<td class="color-red-light">720</td>
                		<td class="color-red-light">21,600</td>
                	</tr>
                	<tr>
                		<td class="color-red-light">PLAN 3</td>
                		<td class="color-red-light">25,000</td>
                		<td class="color-red-light">55</td>
                		<td class="color-red-light">28</td>
                		<td class="color-red-light">1,540</td>
                		<td class="color-red-light">46,200</td>
                	</tr>
                	<tr>
                		<td rowspan="5">90 days</td>
                		<td class="color-red-light">PLAN 2</td>
                		<td class="color-red-light">3,900</td>
                		<td class="color-red-light">4</td>
                		<td class="color-red-light">15</td>
                		<td class="color-red-light">60</td>
                		<td class="color-red-light">5,460</td>
                	</tr>
                	<tr>
                		<td class="color-red-light">PLAN 3</td>
                		<td class="color-red-light">9,000</td>
                		<td class="color-red-light">10</td>
                		<td class="color-red-light">16</td>
                		<td class="color-red-light">160</td>
                		<td class="color-red-light">14,400</td>
                	</tr>
                	<tr>
                		<td class="color-red-light">PLAN 4</td>
                		<td class="color-red-light">18,000</td>
                		<td class="color-red-light">20</td>
                		<td class="color-red-light">17</td>
                		<td class="color-red-light">340</td>
                		<td class="color-red-light">30,600</td>
                	</tr>
                	<tr>
                		<td class="color-red-light">PLAN 5</td>
                		<td class="color-red-light">36,000</td>
                		<td class="color-red-light">40</td>
                		<td class="color-red-light">18</td>
                		<td class="color-red-light">720</td>
                		<td class="color-red-light">64,800</td>
                	</tr>
                	<tr>
                		<td class="color-red-light">PLAN 3</td>
                		<td class="color-red-light">75,000</td>
                		<td class="color-red-light">55</td>
                		<td class="color-red-light">28</td>
                		<td class="color-red-light">1,540</td>
                		<td class="color-red-light">138,600</td>
                	</tr>
                	<tr>
                		<td rowspan="5">180 days</td>
                		<td class="color-red-light">PLAN 2</td>
                		<td class="color-red-light">7,800</td>
                		<td class="color-red-light">4</td>
                		<td class="color-red-light">15</td>
                		<td class="color-red-light">60</td>
                		<td class="color-red-light">10,800</td>
                	</tr>
                	<tr>
                		<td class="color-red-light">PLAN 3</td>
                		<td class="color-red-light">18,000</td>
                		<td class="color-red-light">10</td>
                		<td class="color-red-light">16</td>
                		<td class="color-red-light">160</td>
                		<td class="color-red-light">28,800</td>
                	</tr>
                	<tr>
                		<td class="color-red-light">PLAN 4</td>
                		<td class="color-red-light">36,000</td>
                		<td class="color-red-light">20</td>
                		<td class="color-red-light">17</td>
                		<td class="color-red-light">340</td>
                		<td class="color-red-light">61,200</td>
                	</tr>
                	<tr>
                		<td class="color-red-light">PLAN 5</td>
                		<td class="color-red-light">72,000</td>
                		<td class="color-red-light">40</td>
                		<td class="color-red-light">18</td>
                		<td class="color-red-light">720</td>
                		<td class="color-red-light">129,600</td>
                	</tr>
                	<tr>
                		<td class="color-red-light">PLAN 3</td>
                		<td class="color-red-light">150,000</td>
                		<td class="color-red-light">55</td>
                		<td class="color-red-light">28</td>
                		<td class="color-red-light">1,540</td>
                		<td class="color-red-light">277,200</td>
                	</tr>
                </table>
            </div>
        </div>
    </div>
</div>