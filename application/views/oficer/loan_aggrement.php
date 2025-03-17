<!DOCTYPE html>
<html lang="sw">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOMU YA MAOMBI YA MKOPO</title>
    <style>
        body { font-family: Arial, sans-serif; }
        h2, h3 { text-align: center; margin-top: 10px; margin-bottom: 10px; }
        .section { margin-bottom: 5px; }
        .signature { margin-top: 10px; }
        .header { display: flex; align-items: center; justify-content: space-between; }
        .logo { text-align: center; margin-bottom: 10px; }
        .passport { width: 100px; height: 120px; border: 1px solid #000; }
    </style>
</head>
<body>
    <div class="header">

    
    <img src="<?=  $customer_profile->passport; ?>" alt="Passport Image" class="passport">
    

        <!-- <div class="logo">
            <img src="</?= $company_data->comp_logo ?>" alt="Company Logo" width="150">
        </div> -->
    </div>
    <h2>FOMU YA MAOMBI YA MKOPO</h2>   
    
    <div class="section">
    <p>Mkataba huu umefanyika leo tarehe <strong><?php echo date('d'); ?></strong> mwezi <strong><?php echo date('F'); ?></strong> mwaka <strong><?php echo date('Y'); ?></strong></p>
            <p>Kati ya <b><?= strtoupper($company_data->comp_name) ?></b> wa <b><?=$company_data ->adress ?></b>, kampuni iliyosajiliwa Tanzania (Ambaye katika Mkataba huu utajulikana kama <b>Mkopeshaji </b> ) </b> Na <b><?= strtoupper($customer_profile->f_name) . " " . strtoupper($customer_profile->m_name) . " " . strtoupper($customer_profile->l_name) ?></b> (ambaye katika mkataba huu atajulikana kama <strong>mkopaji</strong>)
            ambaye ni mkazi wa wilaya <b><?= $customer_profile->district ?> </b> kata ya <b><?= $customer_profile->ward ?></b> mtaa wa <b><?= $customer_profile->street ?> </b>
            Simu: <?= $customer_profile->phone_no; ?>   Na kwamba Mkopeshwaji anakubaliana na uwajibikaji wa majukumu yote yalipo kwenye mkataba huu na anathibitisha kudaiwa na <b><?= strtoupper($company_data->comp_name) ?></b> kiasi cha tsh <b><?= number_format($customer_profile->loan_int);?></b>.</p>
            <br>
            <b>HIVYO MKATABA HUU UNASHUHUDIWA NA MAKUBALIANO YAFUATAYO</b>
            <p>(1)Kwamba Mkopeshwaji kwa hiari yake mwenyewe ameweka  dhamana ya kitu ama vitu vyenye thamani kama sehemu ya ukiri wake wa kuwa
            na jukumu la kurejesha fedha na endapo atashindwa kufanya hivo basi dhamana zitakuwa mali ya kampuni kwa mujibu wa sheria.
        <br>
        <br>
        <br>
        <b>ORODHA YA DHAMANA</b>
<p>
    <?php if (!empty($customer_profile)): ?>
            <?= "."?> <b><?= $customer_profile->description; ?></b> <br>
        
    <?php else: ?>
        <i>Hazijajazwa kwenye mfumo</i>
    <?php endif; ?>
</p>

        <br>
        (2)Na Kwamba wahusika kwa mkataba huu wote kwa pamoja wamekubaliana na kuhiari kuwa mkopo huu unahusisha riba na mkopaji atakuwa na kuhiari kukopa pesa itakayolipwa kwa riba  

       <p>(3)Na Kwamba wahusika kwa mkataba huu wote kwa pamoja wamekubaliana  kuwa mkopo huu utakuwa adhabu (Faini) ama kuvunjiwa mkataba ikiwa mkopaji ataenda kinyume na mkataba huu</p> 
        <br>
        (4) Kwamba mkataba huu unahusisha mkopo wa MAREJESHO YA KILA  <?php
if ($customer_profile->day == 1) {
    echo "<strong>SIKU (" . $customer_profile->session . ")</strong>";
} elseif ($customer_profile->day == 7) {
    echo "<strong>WIKI (" . $customer_profile->session . ")</strong>";
} elseif ($customer_profile->day == 30) {  
    echo "<strong>MWEZI (" . $customer_profile->session . ")</strong>";
} else {
    echo "<strong>haijulikani (" . $customer_profile->session . ")</strong>";
}
?>

 <p>(5) Mkopaji na Mkopeshwaji wanakubaliana na majukumu yote yaliyomo kwenye mkataba huu na wanakiri mkopaji  kudaiwa na <b><?= $company_data->comp_name ?></b>  kiasi cha Tsh <b><?= number_format($customer_profile->loan_int); ?></b> Na kwamba mkopo huu umeombwa kupitia biashara ya <b><?= $customer_profile->reason ?></b>  </p>

 (6)Kwamba wahusika wote wa mkataba huu wamekubaliana kuwa mkopaji atapaswa kuwa na mdhamini/wadhamini wake kama mkopaji namba mbili na ambaye atakuwa na jukumu la kuhakikisha mkopaji namba moja analipa mkopo kwa wakati
 na endapo atashindwa kulipa kwa uzembe basi yeye atakuwa na jukumu la kulipa mkopo huo uliobaki wote haraka.

<br>
<br>
<b>SEHEMU YA MDHAMINI</b>
<br><br>
<?php if (!empty($mdhamini)) : ?>
    <?php $sponsor_count = 0; ?>
    <?php foreach ($mdhamini as $sponsor) : ?>
        <?php $sponsor_count++; ?>
        
        <?php if ($sponsor_count == 1) : ?>
            <p>
                Mimi <b><?= strtoupper($sponsor->sp_name ." ". $sponsor->sp_mname ." ". $sponsor->sp_lname )?></b>
                simu <b><?= $sponsor->sp_phone_no ?></b>
                uhusiano wangu na mkopaji <b>Na</b> <b><?= strtoupper($customer_profile->f_name) . " " . strtoupper($customer_profile->m_name) . " " . strtoupper($customer_profile->l_name) ?></b> (ambaye katika mkataba huu atajulikana kama <strong>mkopaji</strong>) ni <b><?= $sponsor->sp_relation?></b>
                kwa hiari yangu mwenyewe na nikiwa na akili timamu bila kushurutishwa na mtu yeyote nakubali kumdhamini Bw/Bi <strong><?= strtoupper($customer_profile->f_name) . " " . strtoupper($customer_profile->m_name) . " " . strtoupper($customer_profile->l_name) ?></strong> (ambaye katika mkataba huu atajulikana kama <strong>mkopaji</strong>)
                na ya kwamba nitakuwa tayari kwa lolote litakojitokeza endapo niliyemdhamini ataenda kinyume na moja kati ya vigezo na masharti ya mkataba huu. Nipo tayari kumlipia endapo atashindwa kurejesha.
            </p>
            <b>SAINI YA MDHAMINI</b> ................................   <b>DOLE GUMBA</b> .......................
        <?php else : ?>
            <p>
                Na <b><?= strtoupper($sponsor->sp_name ." ". $sponsor->sp_mname ." ". $sponsor->sp_lname )?></b>
                simu <b><?= $sponsor->sp_phone_no ?></b>
                uhusiano wangu na mkopaji <b>Na</b> <b><?= strtoupper($customer_profile->f_name) . " " . strtoupper($customer_profile->m_name) . " " . strtoupper($customer_profile->l_name) ?></b> (ambaye katika mkataba huu atajulikana kama <strong>mkopaji</strong>) ni <b><?= $sponsor->sp_relation?></b>
                kwa hiari yangu mwenyewe na nikiwa na akili timamu bila kushurutishwa na mtu yeyote nakubali kumdhamini Bw/Bi <strong><?= strtoupper($customer_profile->f_name) . " " . strtoupper($customer_profile->m_name) . " " . strtoupper($customer_profile->l_name) ?></strong> (ambaye katika mkataba huu atajulikana kama <strong>mkopaji</strong>)
                na ya kwamba nitakuwa tayari kwa lolote litakojitokeza endapo niliyemdhamini ataenda kinyume na moja kati ya vigezo na masharti ya mkataba huu. Nipo tayari kumlipia endapo atashindwa kurejesha.
            </p>
            <b>SAINI YA MDHAMINI</b> ................................   <b>DOLE GUMBA</b> .......................
        <?php endif; ?>
    <?php endforeach; ?>
<?php else : ?>
    <p>taaridha za mdhamini hazijajazwa kwenye mfumo.</p>
<?php endif; ?>



            
        </div>
   
    

   
        <h3>SAHIHI YA MKOPAJI</h3>
        <p>JINA: <strong><?= strtoupper($customer_profile->f_name) . " " . strtoupper($customer_profile->m_name) . " " . strtoupper($customer_profile->l_name) ?></strong></p>
        <p>SAHIHI: ________________________ SIMU:<?= $customer_profile->phone_no; ?></p>
    
    
    
    <div class="signature">
        <h3>AFISA WA KAMPUNI</h3>
        <p>JINA: <b><?= $customer_profile->empl_name ;?></b></p>
        <p>Simu:  <b><?= $customer_profile->empl_no ;?></b></p>
        <p>Office:  <b><?= $customer_profile->blanch_name ;?></b></p>
        <p>wadhifa: ________________________ 
        <p>SAHIHI: ________________________ 
    </div>

   

</body>
</html>