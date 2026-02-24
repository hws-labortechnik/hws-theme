<?php
/*
Template Name: Contact v2
*/

get_header();
?>

<style>
  .steps-container {
    position: relative;
    min-height: 280px; /* adjust as needed to avoid shifting */
  }
  .step {
    position: absolute;
    top: 0; left: 0; right: 0;
  }
  .custom-select {
    position: relative;
    width: 100%;
}


</style>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<main class="mx-auto">

<div
data-aos="fade-in"
data-aos-offset="0"
data-aos-delay="0"
data-aos-duration="600"
data-aos-easing="ease-in-out"   
class="mt-28 pr-16 justify-between items-end inline-flex">
  <div class="px-4 md:px-14 py-12 flex-col justify-start items-start gap-3.5 inline-flex">
    <div class="w-16 text-neutral-600 text-sm font-normal font-['Roboto'] leading-tight">Contact</div>
    <div class=" text-black text-3xl font-light font-['Roboto'] leading-10"><?php the_title(); ?></div>
  </div>
</div>

<div class="grid grid-cols-12 md:gap-20 xl:gap-34 px-4 md:px-14 mb-16">
    <div class="col-span-12 md:col-span-6 mb-12 md:mb-0">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/contact.png" alt="Contact" class="w-full rounded-lg h-auto">
        <div class="mt-6 mb-6 min-h-max w-full bg-[#EAEBEB] rounded-md px-6 py-12 justify-start items-start gap-12 inline-flex">
          <!-- intro-box -->
            <div id="IntroBox" class="">
                <div class="min-h-max px-4 py-6 bg-[#eaebeb] rounded-lg justify-start items-start inline-flex">
                <div class="grow shrink basis-0 flex-col justify-start items-start gap-6 inline-flex">
                    <div class="self-stretch text-[#020202] text-3xl font-light font-['Roboto'] leading-10">Germany</div>
                    <div class="self-stretch justify-start items-start gap-6 inline-flex">
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Address</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">HWS Labortechnik GmbH<br/>Saarstraße 52<br/>55122 Mainz</div>
                      </div>
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Phone</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal"><a href="tel:+496131374560">+49 6131 374560</a></div>
                      </div>
                    </div>
                </div>
                </div>
            </div>
            <!-- ItalyBox -->
            <div id="ItalyBox" class="hidden">
                <div class="h-80 px-4 py-6 bg-[#eaebeb] rounded-lg justify-start items-start inline-flex">
                <div class="grow shrink basis-0 flex-col justify-start items-start gap-6 inline-flex">
                    <div class="self-stretch text-[#020202] text-3xl font-light font-['Roboto'] leading-10">Italy</div>
                    <div class="self-stretch justify-start items-start gap-6 inline-flex">
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Adress</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">Achelit s.r.l.        Via Achille Grandi, 6        20017, Mazzo di Rho (MI)</div>
                      </div>
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">E-mail</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">info@achelit.it</div>
                      </div>
                    </div>
                    <div class="self-stretch justify-start items-start gap-6 inline-flex">
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Phone</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">0039 02 335009311</div>
                      </div>
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Fax</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">0039 02 3282287</div>
                      </div>
                    </div>
                    <div class="self-stretch justify-start items-start gap-6 inline-flex">
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Website</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">www.achelit.it</div>
                      </div>
                    </div>
                </div>
                </div>
            </div>
            <!-- END ItalyBox -->
             <!-- SwitzerlandBox -->
            <div id="SwitzerlandBox" class="hidden">
                <div class="h-80 px-4 py-6 bg-[#eaebeb] rounded-lg justify-start items-start inline-flex">
                <div class="grow shrink basis-0 flex-col justify-start items-start gap-6 inline-flex">
                    <div class="self-stretch text-[#020202] text-3xl font-light font-['Roboto'] leading-10">Switzerland</div>
                    <div class="self-stretch justify-start items-start gap-6 inline-flex">
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Adress</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">Hofacherweg 11, CH-5082 Kaisten</div>
                      </div>
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">E-mail</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">info@amsi.ch</div>
                      </div>
                    </div>
                    <div class="self-stretch justify-start items-start gap-6 inline-flex">
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Phone</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">+41 61 873 90 93</div>
                      </div>
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Fax</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">-</div>
                      </div>
                    </div>
                    <div class="self-stretch justify-start items-start gap-6 inline-flex">
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Website</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">www.amsi.ch</div>
                      </div>
                    </div>
                </div>
                </div>
            </div>
            <!-- END SwitzerlandBox -->
              <!-- IsraelBox -->
            <div id="IsraelBox" class="hidden">
                <div class="h-80 px-4 py-6 bg-[#eaebeb] rounded-lg justify-start items-start inline-flex">
                <div class="grow shrink basis-0 flex-col justify-start items-start gap-6 inline-flex">
                    <div class="self-stretch text-[#020202] text-3xl font-light font-['Roboto'] leading-10">Israel</div>
                    <div class="self-stretch justify-start items-start gap-6 inline-flex">
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Adress</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">Hofacherweg 11, CH-5082 Kaisten</div>
                      </div>
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">E-mail</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">info@amsi.ch</div>
                      </div>
                    </div>
                    <div class="self-stretch justify-start items-start gap-6 inline-flex">
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Phone</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">+41 61 873 90 93</div>
                      </div>
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Fax</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">-</div>
                      </div>
                    </div>
                    <div class="self-stretch justify-start items-start gap-6 inline-flex">
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Website</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">www.amsi.ch</div>
                      </div>
                    </div>
                </div>
                </div>
            </div>
            <!-- END IsraelBox -->
              <!-- ChinaBox -->
              <div id="ChinaBox" class="hidden">
                <div class="h-80 px-4 py-6 bg-[#eaebeb] rounded-lg justify-start items-start inline-flex">
                <div class="grow shrink basis-0 flex-col justify-start items-start gap-6 inline-flex">
                    <div class="self-stretch text-[#020202] text-3xl font-light font-['Roboto'] leading-10">China</div>
                    <div class="self-stretch justify-start items-start gap-6 inline-flex">
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Adress</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">No. 1698 YiShan Road, Room 805, Shanghai, 201103</div>
                      </div>
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">E-mail</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">mail@bguchina.com</div>
                      </div>
                    </div>
                    <div class="self-stretch justify-start items-start gap-6 inline-flex">
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Phone</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">+86 21 3462 7199</div>
                      </div>
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Fax</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">+86 21 3462 7200</div>
                      </div>
                    </div>
                    <div class="self-stretch justify-start items-start gap-6 inline-flex">
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Website</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">www.buchiglas.cn</div>
                      </div>
                    </div>
                </div>
                </div>
            </div>
            <!-- END IndiaBox -->
               <!-- IndiaBox -->
               <div id="IndiaBox" class="hidden">
                <div class="h-80 px-4 py-6 bg-[#eaebeb] rounded-lg justify-start items-start inline-flex">
                <div class="grow shrink basis-0 flex-col justify-start items-start gap-6 inline-flex">
                    <div class="self-stretch text-[#020202] text-3xl font-light font-['Roboto'] leading-10">India</div>
                    <div class="self-stretch justify-start items-start gap-6 inline-flex">
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Adress</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">Buchiglas India Pvt. Ltd.<br/>Unit No. 712, Centrum IT Park, SG Barve Road, Wagle Industrial Estate, Thane 400 604</div>
                      </div>
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">E-mail</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">buchi@buchiglas.in</div>
                      </div>
                    </div>
                    <div class="self-stretch justify-start items-start gap-6 inline-flex">
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Phone</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">+91 22 2081 7778/79</div>
                      </div>
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Fax</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">+91 22 4601 3676</div>
                      </div>
                    </div>
                    <div class="self-stretch justify-start items-start gap-6 inline-flex">
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Website</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">www.buchiglas.in</div>
                      </div>
                    </div>
                </div>
                </div>
            </div>
            <!-- END IndiaBox -->

               <!-- PolandBox -->
               <div id="PolandBox" class="hidden">
                <div class="h-80 px-4 py-6 bg-[#eaebeb] rounded-lg justify-start items-start inline-flex">
                <div class="grow shrink basis-0 flex-col justify-start items-start gap-6 inline-flex">
                    <div class="self-stretch text-[#020202] text-3xl font-light font-['Roboto'] leading-10">Poland</div>
                    <div class="self-stretch justify-start items-start gap-6 inline-flex">
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Adress</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">IKA POL<br/>ul. Przy Bazantarni 4/6, Warszawa, 02-793</div>
                      </div>
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">E-mail</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">info@ikapol.pl</div>
                      </div>
                    </div>
                    <div class="self-stretch justify-start items-start gap-6 inline-flex">
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Phone</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">+48 22 649 24 05</div>
                      </div>
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Fax</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">+48 22 859 14 39</div>
                      </div>
                    </div>
                    <div class="self-stretch justify-start items-start gap-6 inline-flex">
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Website</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">www.ikapol.pl</div>
                      </div>
                    </div>
                </div>
                </div>
            </div>
            <!-- END PolandBox -->


               <!-- BritainBox -->
               <div id="BritainBox" class="hidden">
                <div class="h-80 px-4 py-6 bg-[#eaebeb] rounded-lg justify-start items-start inline-flex">
                <div class="grow shrink basis-0 flex-col justify-start items-start gap-6 inline-flex">
                    <div class="self-stretch text-[#020202] text-3xl font-light font-['Roboto'] leading-10">Great Britain</div>
                    <div class="self-stretch justify-start items-start gap-6 inline-flex">
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Adress</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">Ken Kimble (Reactor Vessels Ltd.)<br/>85 Lakesview International Business Park, 98 Thomas Way, Hersden, Canterbury CT3 4NH</div>
                      </div>
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">E-mail</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">general@kenkimble.co.uk</div>
                      </div>
                    </div>
                    <div class="self-stretch justify-start items-start gap-6 inline-flex">
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Phone</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">0044 / (0)1 / 227 / 710274</div>
                      </div>
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Fax</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">0044 / (0)1 / 227 / 258840</div>
                      </div>
                    </div>
                    <div class="self-stretch justify-start items-start gap-6 inline-flex">
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Website</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">www.kenkimble.co.uk</div>
                      </div>
                    </div>
                </div>
                </div>
            </div>
            <!-- END BritainBox -->


             <!-- TaiwanBox -->
             <div id="TaiwanBox" class="hidden">
                <div class="h-80 px-4 py-6 bg-[#eaebeb] rounded-lg justify-start items-start inline-flex">
                <div class="grow shrink basis-0 flex-col justify-start items-start gap-6 inline-flex">
                    <div class="self-stretch text-[#020202] text-3xl font-light font-['Roboto'] leading-10">Taiwan</div>
                    <div class="self-stretch justify-start items-start gap-6 inline-flex">
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Adress</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">Kou Fua Technology Co., Ltd.<br/>5F-3, 505 Kwang Fu S. Road, Taipei, 110</div>
                      </div>
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">E-mail</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">mail@koufua.com.tw</div>
                      </div>
                    </div>
                    <div class="self-stretch justify-start items-start gap-6 inline-flex">
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Phone</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">(02) 2758-9301</div>
                      </div>
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Fax</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">(02) 2758-0782</div>
                      </div>
                    </div>
                    <div class="self-stretch justify-start items-start gap-6 inline-flex">
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Website</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">-</div>
                      </div>
                    </div>
                </div>
                </div>
            </div>
            <!-- END TaiwanBox -->


           <!-- TurkeyBox -->
           <div id="TurkeyBox" class="hidden">
                <div class="h-80 px-4 py-6 bg-[#eaebeb] rounded-lg justify-start items-start inline-flex">
                <div class="grow shrink basis-0 flex-col justify-start items-start gap-6 inline-flex">
                    <div class="self-stretch text-[#020202] text-3xl font-light font-['Roboto'] leading-10">Turkey</div>
                    <div class="self-stretch justify-start items-start gap-6 inline-flex">
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Adress</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">Kovalent Ltd.<br/>Kizkulesi Sokak No. 21/5, Gaziosmanpasa, Ankara, TR</div>
                      </div>
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">E-mail</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">Satis@Kovalentlab.com</div>
                      </div>
                    </div>
                    <div class="self-stretch justify-start items-start gap-6 inline-flex">
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Phone</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">90-312-4463135</div>
                      </div>
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Fax</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">+90-532-549 1237</div>
                      </div>
                    </div>
                    <div class="self-stretch justify-start items-start gap-6 inline-flex">
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Website</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">www.Kovalentlab.com</div>
                      </div>
                    </div>
                </div>
                </div>
            </div>
            <!-- END TurkeyBox -->

            <!-- RussiaBox -->
           <div id="RussiaBox" class="hidden">
                <div class="h-80 px-4 py-6 bg-[#eaebeb] rounded-lg justify-start items-start inline-flex">
                <div class="grow shrink basis-0 flex-col justify-start items-start gap-6 inline-flex">
                    <div class="self-stretch text-[#020202] text-3xl font-light font-['Roboto'] leading-10">Russia</div>
                    <div class="self-stretch justify-start items-start gap-6 inline-flex">
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Adress</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">LABCHIMTECH LTD.<br/>PO Box 90, Moscow, 127282</div>
                      </div>
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">E-mail</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">info@labxt.ru</div>
                      </div>
                    </div>
                    <div class="self-stretch justify-start items-start gap-6 inline-flex">
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Phone</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">+7 495 66299 90</div>
                      </div>
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Fax</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">+7495 66299 90</div>
                      </div>
                    </div>
                    <div class="self-stretch justify-start items-start gap-6 inline-flex">
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Website</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">www.labxt.ru</div>
                      </div>
                    </div>
                </div>
                </div>
            </div>
            <!-- END RussiaBox -->

          <!-- NorwayBox -->
          <div id="NorwayBox" class="hidden">
                <div class="h-96 px-4 py-6 bg-[#eaebeb] rounded-lg justify-start items-start inline-flex">
                <div class="grow shrink basis-0 flex-col justify-start items-start gap-6 inline-flex">
                    <div class="self-stretch text-[#020202] text-3xl font-light font-['Roboto'] leading-10">Norway</div>
                    <div class="self-stretch justify-start items-start gap-6 inline-flex">
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Adress</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">Nerliens Meszansky AS<br/>Økernveien 121, NO-0579 OSLO</div>
                      </div>
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">E-mail</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">info@nmas.no</div>
                      </div>
                    </div>
                    <div class="self-stretch justify-start items-start gap-6 inline-flex">
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Phone</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">+47 22 66 65 00</div>
                      </div>
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Fax</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">+47 22 66 65 01</div>
                      </div>
                    </div>
                    <div class="self-stretch justify-start items-start gap-6 inline-flex">
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Website</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">www.nmas.no</div>
                      </div>
                    </div>
                </div>
                </div>
            </div>
            <!-- END NorwayBox -->

          <!-- FranceBox -->
          <div id="FranceBox" class="hidden">
                <div class="h-96 px-4 py-6 bg-[#eaebeb] rounded-lg justify-start items-start inline-flex">
                <div class="grow shrink basis-0 flex-col justify-start items-start gap-6 inline-flex">
                    <div class="self-stretch text-[#020202] text-3xl font-light font-['Roboto'] leading-10">France</div>
                    <div class="self-stretch justify-start items-start gap-6 inline-flex">
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Adress</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">Optimus Instruments<br/>3 Rue de Embruns, Blainville sur Orne, 14550</div>
                      </div>
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">E-mail</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">loic.bouteloup@optimus-instruments.com</div>
                      </div>
                    </div>
                    <div class="self-stretch justify-start items-start gap-6 inline-flex">
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Phone</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">+33 (0)6 84 26 97 96</div>
                      </div>
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Fax</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">+32 (0)3 744 02 37</div>
                      </div>
                    </div>
                    <div class="self-stretch justify-start items-start gap-6 inline-flex">
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Website</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">-</div>
                      </div>
                    </div>
                </div>
                </div>
            </div>
            <!-- END FranceBox -->

          <!-- BelgiumBox -->
          <div id="BelgiumBox" class="hidden">
                <div class="h-96 px-4 py-6 bg-[#eaebeb] rounded-lg justify-start items-start inline-flex">
                <div class="grow shrink basis-0 flex-col justify-start items-start gap-6 inline-flex">
                    <div class="self-stretch text-[#020202] text-3xl font-light font-['Roboto'] leading-10">Belgium</div>
                    <div class="self-stretch justify-start items-start gap-6 inline-flex">
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Adress</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">Optimus Instruments<br/>Hospitaalstraat 35, Steendorp, B-9140</div>
                      </div>
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">E-mail</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">info@optimus.be</div>
                      </div>
                    </div>
                    <div class="self-stretch justify-start items-start gap-6 inline-flex">
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Phone</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">+32 3 744 05 02</div>
                      </div>
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Fax</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">+32 3 744 02 37</div>
                      </div>
                    </div>
                    <div class="self-stretch justify-start items-start gap-6 inline-flex">
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Website</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">-</div>
                      </div>
                    </div>
                </div>
                </div>
            </div>
            <!-- END BelgiumBox -->

          <!-- SloveniaBox -->
          <div id="SloveniaBox" class="hidden">
                <div class="h-96 px-4 py-6 bg-[#eaebeb] rounded-lg justify-start items-start inline-flex">
                <div class="grow shrink basis-0 flex-col justify-start items-start gap-6 inline-flex">
                    <div class="self-stretch text-[#020202] text-3xl font-light font-['Roboto'] leading-10">Slovenia</div>
                    <div class="self-stretch justify-start items-start gap-6 inline-flex">
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Adress</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">Primalab<br/>Breg pri Polzeli 45 b, Polzela, SI-3313</div>
                      </div>
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">E-mail</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">info@primalab.si</div>
                      </div>
                    </div>
                    <div class="self-stretch justify-start items-start gap-6 inline-flex">
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Phone</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">+386 3 705 09 80/81</div>
                      </div>
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Fax</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">+386 3 572 22 07</div>
                      </div>
                    </div>
                    <div class="self-stretch justify-start items-start gap-6 inline-flex">
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Website</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">www.primalab.si</div>
                      </div>
                    </div>
                </div>
                </div>
            </div>
            <!-- END SloveniaBox -->

            <!-- CroatiaBox -->
          <div id="CroatiaBox" class="hidden">
                <div class="h-96 px-4 py-6 bg-[#eaebeb] rounded-lg justify-start items-start inline-flex">
                <div class="grow shrink basis-0 flex-col justify-start items-start gap-6 inline-flex">
                    <div class="self-stretch text-[#020202] text-3xl font-light font-['Roboto'] leading-10">Croatia</div>
                    <div class="self-stretch justify-start items-start gap-6 inline-flex">
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Adress</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">Ru-Ve doo<br/>Prosinačka 14, Sv. Nedjelja, 10431</div>
                      </div>
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">E-mail</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">hrvoje.runje@ru-ve.hr</div>
                      </div>
                    </div>
                    <div class="self-stretch justify-start items-start gap-6 inline-flex">
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Phone</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">+385(0)1-333-52-55</div>
                      </div>
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Fax</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">+385(0)1-333-52-59</div>
                      </div>
                    </div>
                    <div class="self-stretch justify-start items-start gap-6 inline-flex">
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Website</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">www.ru-ve.hr</div>
                      </div>
                    </div>
                </div>
                </div>
            </div>
            <!-- END CroatiaBox -->

             <!-- HungaryBox -->
          <div id="HungaryBox" class="hidden">
                <div class="h-96 px-4 py-6 bg-[#eaebeb] rounded-lg justify-start items-start inline-flex">
                <div class="grow shrink basis-0 flex-col justify-start items-start gap-6 inline-flex">
                    <div class="self-stretch text-[#020202] text-3xl font-light font-['Roboto'] leading-10">Hungary</div>
                    <div class="self-stretch justify-start items-start gap-6 inline-flex">
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Adress</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">Spektrum 3D<br/>Simon L u. å, Debrecen, 4034</div>
                      </div>
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">E-mail</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">info@spektrum-3d.hu</div>
                      </div>
                    </div>
                    <div class="self-stretch justify-start items-start gap-6 inline-flex">
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Phone</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">+3652521131</div>
                      </div>
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Fax</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">+3652470069</div>
                      </div>
                    </div>
                    <div class="self-stretch justify-start items-start gap-6 inline-flex">
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Website</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">-</div>
                      </div>
                    </div>
                </div>
                </div>
            </div>
            <!-- END HungaryBox -->

              <!-- FinlandBox -->
          <div id="FinlandBox" class="hidden">
                <div class="h-96 px-4 py-6 bg-[#eaebeb] rounded-lg justify-start items-start inline-flex">
                <div class="grow shrink basis-0 flex-col justify-start items-start gap-6 inline-flex">
                    <div class="self-stretch text-[#020202] text-3xl font-light font-['Roboto'] leading-10">Finland</div>
                    <div class="self-stretch justify-start items-start gap-6 inline-flex">
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Adress</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">Ditap Oy / Rembe Oy<br/>Hitsaajankatu 4C, 00810 Helsinki</div>
                      </div>
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">E-mail</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">pasi.ponsi@ditap.fi, pasi.ponsi@rembe.fi</div>
                      </div>
                    </div>
                    <div class="self-stretch justify-start items-start gap-6 inline-flex">
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Phone</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">+358 10 6662345</div>
                      </div>
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Fax</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">-</div>
                      </div>
                    </div>
                    <div class="self-stretch justify-start items-start gap-6 inline-flex">
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Website</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">www.ditap.fi</div>
                      </div>
                    </div>
                </div>
                </div>
            </div>
            <!-- END FinlandBox -->

                <!-- SpainBox -->
          <div id="SpainBox" class="hidden">
                <div class="h-96 px-4 py-6 bg-[#eaebeb] rounded-lg justify-start items-start inline-flex">
                <div class="grow shrink basis-0 flex-col justify-start items-start gap-6 inline-flex">
                    <div class="self-stretch text-[#020202] text-3xl font-light font-['Roboto'] leading-10">Spain</div>
                    <div class="self-stretch justify-start items-start gap-6 inline-flex">
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Adress</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">Suministros Nesslab SL<br/>Passatge dels Ametllers 17 Local 2, 08290 Cerdanyola del Vallès, Barcelona</div>
                      </div>
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">E-mail</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">comercial@nesslab.es</div>
                      </div>
                    </div>
                    <div class="self-stretch justify-start items-start gap-6 inline-flex">
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Phone</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">-</div>
                      </div>
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Fax</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">-</div>
                      </div>
                    </div>
                    <div class="self-stretch justify-start items-start gap-6 inline-flex">
                      <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                          <div class="self-stretch text-[#888888] text-base font-light font-['Roboto'] leading-normal">Website</div>
                          <div class="self-stretch text-[#020202] text-base font-light font-['Roboto'] leading-normal">www.nesslab.es</div>
                      </div>
                    </div>
                </div>
                </div>
            </div>
            <!-- END SpainBox -->

        </div>
    </div>
    <div class="col-span-12 md:col-span-6">
      <!-- the_content(); ?>-->

<!-- form -->
<div class="mx-auto">
        <!-- Progress Bar -->
        <div class="mb-12 relative">
            <div class="flex justify-between relative">
                <div class="z-50 step-indicator active" data-step="1">
                    <div class="mb-2 mx-auto w-3 h-3 bg-gray-200 rounded-full transition-all duration-300"></div>
                    <span class="text-sm font-thin">1. Location</span>
                </div>
                <div class="z-50 step-indicator" data-step="2">
                    <div class="mb-2 mx-auto w-3 h-3 bg-gray-200 rounded-full transition-all duration-300"></div>
                    <span class="text-sm text-gray-500">2. Contact Details</span>
                </div>
                <div class="z-50 step-indicator" data-step="3">
                    <div class="mb-2 mx-auto w-3 h-3 bg-gray-200 rounded-full transition-all duration-300"></div>
                    <span class="text-sm text-gray-500">3. Message</span>
                </div>
                <div class="z-10 absolute top-1 left-5 right-12 h-px bg-black/10 transition-all duration-300 w-[89%] md:w-[91%] xl:w-[93%]"></div>
            </div>
        </div>

        <!-- Form -->
        <form id="multi-step-form" method="POST" class="space-y-8">
            <!-- Step 1: Location -->
            <div class="step transition-opacity duration-300 opacity-0 hidden" id="step-1">
                <h2 class="text-3xl font-thin mb-8">1. Location</h2>
                <div class="space-y-6">
                    <div class="text-[#020202] text-xl font-light font-['Roboto'] leading-[30px]">Region</div>
                    <div id="mainselection" class="custom-select w-full">
                        <select name="region" class=" text-[#888888] w-full h-14 px-4 py-3 rounded-full bg-[#F2F3F3] border border-[#4f4f4f] focus:outline-none focus:border-black">
                            <option value="">Select Your region</option>
                            <option value="europe">Europe</option>
                            <option value="latam">Latam</option>
                            <option value="northamerica">North America</option>
                            <option value="asia">Asia</option>
                            <option value="middleeast">Middle East</option>
                        </select>
                    </div>

                    <div id="countryselection" class="custom-select">
                        <label class="block mb-2 text-[#020202] text-xl font-light font-['Roboto'] leading-[30px]">Country</label>
                        <select name="country" class=" text-[#888888] w-full h-14 px-4 py-3 bg-[#F2F3F3] rounded-full border border-[#888888] focus:outline-none focus:border-black">
                            <option value="">Select Country</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Step 2: Contact Details -->
            <div class="step transition-opacity duration-300 opacity-0 hidden" id="step-2">
                <h2 class="text-3xl font-thin mb-8">2. Contact Details</h2>
                <div class="space-y-6">
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block mb-2 text-sm font-medium">First Name</label>
                            <input type="text" name="first_name" class="w-full px-4 py-3 rounded-full border border-gray-200 focus:outline-none focus:border-black">
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-medium">Last Name</label>
                            <input type="text" name="last_name" class="w-full px-4 py-3 rounded-full border border-gray-200 focus:outline-none focus:border-black">
                        </div>
                    </div>
                    <div>
                        <label class="block mb-2 text-sm font-medium">Email</label>
                        <input type="email" name="email" class="w-full px-4 py-3 rounded-full border border-gray-200 focus:outline-none focus:border-black">
                    </div>
                </div>
            </div>

            <!-- Step 3: Message -->
            <div class="step transition-opacity duration-300 opacity-0 hidden" id="step-3">
                <h2 class="text-3xl font-thin mb-8">3. Message</h2>
                <div class="space-y-6">
                    <div>
                        <label class="block mb-2 text-sm font-medium">Message</label>
                        <textarea name="message" rows="4" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:border-black"></textarea>
                    </div>
                    <div class="flex items-start gap-2">
                        <input type="checkbox" name="privacy" id="privacy" class="mt-1">
                        <label for="privacy" class="text-sm text-gray-600">
                            I agree to the privacy policy and terms of service
                        </label>
                    </div>
                </div>
            </div>

            <!-- Navigation Buttons -->
            <div class="flex justify-between pt-6">
                <button type="button" id="prev-btn" class="px-6 py-2 rounded-full border border-gray-200 hover:border-black transition-colors hidden">
                    Back
                </button>
                <button type="button" id="next-btn" class="ml-auto px-6 py-2 rounded-full bg-black text-white hover:bg-gray-800 transition-colors">
                    Next
                </button>
            </div>
        </form>
    </div>
<!-- END form -->


    </div>
</div>





<div class="justify-between items-end mb-12">
    <div class="px-16 max-w-max mt-28 justify-start items-center">
        <a href="/" class="group transition-all duration-1000 px-4 py-2 rounded-3xl border border-neutral-600 text-sm font-normal leading-tight flex justify-start items-center hover:bg-[#4F4F4F] hover:text-white">
            <svg class="transition-all duration-300 w-4 h-4 float-left mr-2 text-black group-hover:text-white group-hover:w-6 group-hover:h-4 group-hover:mr-4 group-hover:scale-150" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.85355 3.14645C7.04882 3.34171 7.04882 3.65829 6.85355 3.85355L3.70711 7H12.5C12.7761 7 13 7.22386 13 7.5C13 7.77614 12.7761 8 12.5 8H3.70711L6.85355 11.1464C7.04882 11.3417 7.04882 11.6583 6.85355 11.8536C6.65829 12.0488 6.34171 12.0488 6.14645 11.8536L2.14645 7.85355C1.95118 7.65829 1.95118 7.34171 2.14645 7.14645L6.14645 3.14645C6.34171 2.95118 6.65829 2.95118 6.85355 3.14645Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
            Back home
        </a>
    </div>
</div>

</main>
<?php endwhile; endif; ?>



<script>
document.addEventListener('DOMContentLoaded', function() {
  const form = document.getElementById('multi-step-form');
  const stepsContainer = document.createElement('div');
  stepsContainer.classList.add('steps-container');
  form.prepend(stepsContainer);

  const steps = form.querySelectorAll('.step');
  steps.forEach(step => {
    stepsContainer.appendChild(step);
    step.classList.add('transition-opacity','duration-300','opacity-0','hidden');
  });

  function fadeIn(element) {
    element.classList.remove('hidden');
    requestAnimationFrame(() => element.classList.remove('opacity-0'));
  }

  function fadeOut(element) {
    element.classList.add('opacity-0');
    setTimeout(() => element.classList.add('hidden'), 300);
  }

  function updateStepIndicators() {
    document.querySelectorAll('.step-indicator').forEach((indicator) => {
      const stepNumber = parseInt(indicator.getAttribute('data-step'), 10);
      const dot = indicator.querySelector('div');
      if (stepNumber === currentStep) {
        dot.classList.remove('bg-gray-200');
        dot.classList.add('bg-black', 'outline', 'outline-offset-1');
      } else {
        dot.classList.add('bg-gray-200');
        dot.classList.remove('bg-black', 'outline', 'outline-offset-1');
      }
    });
  }

  function showStep(stepNumber) {
    steps.forEach((step, index) => {
      if (index + 1 === stepNumber) {
        fadeIn(step);
      } else {
        fadeOut(step);
      }
    });
    prevBtn.classList.toggle('hidden', stepNumber === 1);
    nextBtn.textContent = stepNumber === steps.length ? 'Send' : 'Next';
    updateStepIndicators();
  }

  const nextBtn = document.getElementById('next-btn');
  const prevBtn = document.getElementById('prev-btn');
  let currentStep = 1;

  nextBtn.addEventListener('click', () => {
    if (currentStep < steps.length) {
      currentStep++;
      showStep(currentStep);
    } else {
      form.submit();
    }
  });

  prevBtn.addEventListener('click', () => {
    if (currentStep > 1) {
      currentStep--;
      showStep(currentStep);
    }
  });

  const regionSelect = form.querySelector('select[name="region"]');
  const countrySelect = form.querySelector('select[name="country"]');
  
  const countries = {
    europe: ['Italy', 'Switzerland','Norway', 'Belgium', 'France', 'Germany', 'Spain', 'Britain', 'Poland'],
    //latam: ['Brazil', 'Mexico', 'Argentina', 'Colombia', 'Chile'],
    //northamerica: ['USA', 'Canada', 'Mexico', 'Guatemala', 'Costa Rica'],
    asia: ['China', 'Russia', 'India','Taiwan'],
    //americas: ['USA', 'Canada', 'Brazil', 'Mexico', 'Argentina'],
    middleeast: ['Turkey','Israel']
  };

  regionSelect.addEventListener('change', () => {
    const selectedRegion = regionSelect.value;
    countrySelect.innerHTML = '<option value="">Select Country</option>';
    
    if (selectedRegion && countries[selectedRegion]) {
      countries[selectedRegion].forEach(country => {
        const option = document.createElement('option');
        option.value = country.toLowerCase();
        option.textContent = country;
        countrySelect.appendChild(option);
      });
    }
  });

  // Map dropdown "value" to the corresponding box ID
  const countryBoxes = {
    italy: '#ItalyBox',
    switzerland: '#SwitzerlandBox',
    israel: '#IsraelBox',
    china: '#ChinaBox',
    india: '#IndiaBox',
    poland: '#PolandBox',
    britain: '#BritainBox',
    taiwan: '#TaiwanBox',
    turkey: '#TurkeyBox',
    russia: '#RussiaBox',
    norway: '#NorwayBox',
    france: '#FranceBox',
    belgium: '#BelgiumBox',
    slovenia: '#SloveniaBox',
    croatia: '#CroatiaBox',
    hungary: '#HungaryBox',
    finland: '#FinlandBox',
    spain: '#SpainBox',

    // Add more as needed: switzerland: '#SwitzerlandBox', etc.
  };

  // Hide all known boxes
  function hideAllCountryBoxes() {
    Object.values(countryBoxes).forEach(box => {
      document.querySelector(box)?.classList.add('hidden');
    });
  }

  countrySelect.addEventListener('change', () => {
    const selectedCountry = countrySelect.value;
    hideAllCountryBoxes();
    // If we have a box for this country, show it; otherwise show #IntroBox
    if (countryBoxes[selectedCountry]) {
      document.querySelector('#IntroBox')?.classList.add('hidden');
      document.querySelector(countryBoxes[selectedCountry])?.classList.remove('hidden');
    } else {
      document.querySelector('#IntroBox')?.classList.remove('hidden');
    }
    if (selectedCountry) {
      currentStep = 2;
      showStep(2);
    }
  });

  const firstNameField = form.querySelector('input[name="first_name"]');
  const lastNameField = form.querySelector('input[name="last_name"]');
  const emailField = form.querySelector('input[name="email"]');

  [firstNameField, lastNameField, emailField].forEach(field => {
    field.addEventListener('input', () => {
      if (firstNameField.value.trim() &&
          lastNameField.value.trim() &&
          emailField.value.trim()) {
        currentStep = 3;
        showStep(3);
      }
    });
  });

  showStep(currentStep);
});
</script>

<?php
get_footer();
?>