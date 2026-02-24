<?php
/*
Template Name: Contact
*/

get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<main class="mx-auto">

<div
data-aos="fade-in"
data-aos-offset="0"
data-aos-delay="0"
data-aos-duration="600"
data-aos-easing="ease-in-out"   
class="mt-28 w-full pr-16 justify-between items-end inline-flex">
  <div class="px-4 md:px-14 py-12 flex-col justify-start items-start gap-3.5 inline-flex">
    <div class="w-16 text-neutral-600 text-sm font-normal font-['Roboto'] leading-tight">Contact</div>
    <div class="w-full text-black text-3xl font-light font-['Roboto'] leading-10"><?php the_title(); ?></div>
  </div>
</div>

<div class="grid grid-cols-12 gap-6 md:gap-14 px-4 md:px-14">
    <div class="col-span-12 md:col-span-6 pr-0 md:pr-20">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/contact.png" alt="Contact" class="w-full rounded-lg h-auto">
        <div class="mt-6 bg-zinc-100 justify-start items-start gap-12 inline-flex">
          <div class="flex-col justify-start items-start gap-3 inline-flex">
            <div class="text-center text-black text-sm font-light font-['Roboto'] leading-tight">Address</div>
            <div class="self-stretch text-black text-base font-normal font-['Roboto'] leading-normal">HWS Labortechnik GmbH<br/>Saarstraße 52<br/>55122 Mainz</div>
          </div>
          <div class="flex-col justify-start items-start gap-3 inline-flex">
            <div class="text-center text-black text-sm font-light font-['Roboto'] leading-tight">Phone</div>
            <div class="text-center text-black text-base font-normal font-['Roboto'] leading-normal">+49 6131 374560</div>
          </div>
        </div>
    </div>
    <div
    data-aos="fade-in"
    data-aos-offset="0"
    data-aos-delay="600"
    data-aos-duration="600"
    data-aos-easing="ease-in-out"   
    class="col-span-12 md:col-span-6">
      <!-- the_content(); ?>-->

<div class="w-full h-auto flex-col justify-start items-start gap-8 inline-flex">
  <div class="self-stretch h-full flex-col justify-start items-start gap-8 flex">
    <div class="self-stretch justify-start items-center gap-6 inline-flex">
      <div class="grow shrink basis-0 flex-col justify-start items-start gap-6 inline-flex">
        <div class="self-stretch text-black text-xl font-light font-['Roboto'] leading-loose">First name</div>
        <div class="w-full self-stretch h-14 px-6 py-2.5 rounded-3xl border border-neutral-600 justify-start items-center gap-2.5 inline-flex">
          <div class="text-center text-zinc-500 text-base font-normal font-['Roboto'] leading-normal">First name</div>
        </div>
      </div>
      <div class="grow shrink basis-0 flex-col justify-start items-start gap-6 inline-flex">
        <div class="self-stretch text-black text-xl font-light font-['Roboto'] leading-loose">Last name</div>
        <div class="self-stretch h-14 px-6 py-2.5 rounded-3xl border border-neutral-600 justify-start items-center gap-2.5 inline-flex">
          <div class="text-center text-zinc-500 text-base font-normal font-['Roboto'] leading-normal">Last name</div>
        </div>
      </div>
    </div>
    <div class="self-stretch h-28 flex-col justify-start items-start gap-6 flex">
      <div class="self-stretch text-black text-xl font-light font-['Roboto'] leading-loose">E-mail adress</div>
      <div class="self-stretch h-14 px-6 py-2.5 rounded-3xl border border-neutral-600 justify-start items-center gap-2.5 inline-flex">
        <div class="text-center text-zinc-500 text-base font-normal font-['Roboto'] leading-normal">E-mail adress</div>
      </div>
    </div>
    <div class="self-stretch h-72 flex-col justify-start items-start gap-6 flex">
      <div class="self-stretch text-black text-xl font-light font-['Roboto'] leading-loose">Message</div>
      <div class="self-stretch h-60 p-6 rounded-3xl border border-neutral-600 justify-start items-start gap-2.5 inline-flex">
        <div class="text-center text-zinc-500 text-base font-normal font-['Roboto'] leading-normal">Message</div>
      </div>
    </div>
  </div>
  <div class="self-stretch justify-between items-center inline-flex">
        <a href="/contact" class="max-w-max group transition-all duration-1000 px-4 py-2 rounded-3xl  text-sm font-normal leading-tight flex items-center justify-center bg-[#000] hover:bg-[#4F4F4F] text-white">
          Send message
          <svg class="transition-all duration-300 w-5 h-5 float-right ml-2 text-white group-hover:text-white group-hover:w-6 group-hover:h-4 group-hover:ml-4 group-hover:scale-150" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg> 
        </a>
    <div class="justify-start items-center gap-6 flex">
      <div class="w-6 h-6 rounded-lg border border-neutral-600"></div>
      <div><span class="text-neutral-600 text-sm font-light font-['Roboto'] leading-tight">I agree to the </span><span class="text-neutral-600 text-sm font-light font-['Roboto'] underline leading-tight">privacy policy</span></div>
    </div>
  </div>
</div>






    </div>
</div>

<div class="mt-20 w-full pr-16 justify-between items-end inline-flex">
  <div class="px-4 md:px-14 py-12 flex-col justify-start items-start gap-3.5 inline-flex">
    <div class="w-16 text-neutral-600 text-sm font-normal font-['Roboto'] leading-tight">Agencies</div>
    <div class="w-96 text-black text-3xl font-light font-['Roboto'] leading-10">Find our representatives around the world</div>
  </div>
</div>

<div class="items-center gap-6 grid grid-cols-12 px-4 md:px-14">

          <div class="col-span-12 md:col-span-3 mb-7 flex grow w-full h-[620px] bg-[#4f4f4f] px-6 py-12 rounded-lg">
            <div class="flex flex-col justify-between self-stretch grow">
              <div class="flex flex-col gap-6 self-stretch">
                <span class="font-light text-[32px] leading-[40px] text-white">Italy</span>
                <div class="flex flex-col gap-2 self-stretch">
                  <span class="font-light text-base text-[#898989]">Adress</span>
                  <span class="font-light text-base text-white">Achelit s.r.l.Via Achille Grandi, 620017, Mazzo di Rho (MI)</span>
                </div>
                <div class="flex flex-col gap-2 self-stretch">
                  <span class="font-light text-base text-[#898989]">Phone</span>
                  <span class="font-light text-base text-white">0039 02 335009311</span>
                </div>
                <div class="flex flex-col gap-2 self-stretch">
                  <span class="font-light text-base text-[#898989]">Fax</span>
                  <span class="font-light text-base text-white">0039 02 3282287</span>
                </div>
                <div class="flex flex-col gap-2 self-stretch">
                  <span class="font-light text-base text-[#898989]">Mail</span>
                  <span class="font-light text-base text-white">info@achelit.it</span>
                </div>
              </div>
              <div class="h-10 w-min flex items-center gap-4 px-4 py-2 rounded-[36px] border border-solid border-white">
                <span class="font-normal text-base text-white">achelit.it</span>
                <div class="w-4 h-4">
                  <div class="w-4 h-4"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-span-12 md:col-span-3 mb-7 flex grow w-full h-[620px] bg-[#4f4f4f] px-6 py-12 rounded-lg">
            <div class="flex flex-col justify-between self-stretch grow">
              <div class="flex flex-col gap-6 self-stretch">
                <span class="font-light text-[32px] leading-[40px] text-white">Switzerland</span>
                <div class="flex flex-col gap-2 self-stretch">
                  <span class="font-light text-base text-[#898989]">Adress</span>
                  <span class="font-light text-base text-white">AMSI-Glas AGHofacherweg 11CH-5082 Kaisten</span>
                </div>
                <div class="flex flex-col gap-2 self-stretch">
                  <span class="font-light text-base text-[#898989]">Phone</span>
                  <span class="font-light text-base text-white">+41 61 873 90 93</span>
                </div>
                <div class="flex flex-col gap-2 self-stretch">
                  <span class="font-light text-base text-[#898989]">Mail</span>
                  <span class="font-light text-base text-white">info@amsi.ch</span>
                </div>
              </div>
              <div class="h-10 flex items-center gap-4 px-4 py-2 rounded-[36px] border border-solid border-white">
                <span class="font-normal text-base text-white">amsi.ch</span>
                <div class="w-4 h-4">
                  <div class="w-4 h-4"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-span-12 md:col-span-3 mb-7 flex grow w-full h-[620px] bg-[#4f4f4f] px-6 py-12 rounded-lg">
            <div class="flex flex-col justify-between self-stretch grow">
              <div class="flex flex-col gap-6 self-stretch">
                <span class="font-light text-[32px] leading-[40px] text-white">Israel</span>
                <div class="flex flex-col gap-2 self-stretch">
                  <span class="font-light text-base text-[#898989]">Adress</span>
                  <span class="font-light text-base text-white">Bein M. LTDDerekh Ben-Zvi 8468104, Tel Aviv</span>
                </div>
                <div class="flex flex-col gap-2 self-stretch">
                  <span class="font-light text-base text-[#898989]">Phone</span>
                  <span class="font-light text-base text-white">03-6442455</span>
                </div>
                <div class="flex flex-col gap-2 self-stretch">
                  <span class="font-light text-base text-[#898989]">Fax</span>
                  <span class="font-light text-base text-white">03-6442433</span>
                </div>
                <div class="flex flex-col gap-2 self-stretch">
                  <span class="font-light text-base text-[#898989]">Mail</span>
                  <span class="font-light text-base text-white">vered@beinzm.co.il</span>
                </div>
              </div>
              <div class="h-10 flex items-center gap-4 px-4 py-2 rounded-[36px] border border-solid border-white">
                <span class="font-normal text-base text-white">beinzm.co.il</span>
                <div class="w-4 h-4">
                  <div class="w-4 h-4"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-span-12 md:col-span-3 mb-7  flex grow w-full h-[620px] bg-[#4f4f4f] px-6 py-12 rounded-lg">
            <div class="flex flex-col justify-between self-stretch grow">
              <div class="flex flex-col gap-6 self-stretch">
                <span class="font-light text-[32px] leading-[40px] text-white">China</span>
                <div class="flex flex-col gap-2 self-stretch">
                  <span class="font-light text-base text-[#898989]">Adress</span>
                  <span class="font-light text-base text-white">Buchiglas China Co., Ltd. / 布启仪器设备贸易(上海)有限公司 上海市宜山路1698号 805室No. 1698 YiShan Road, Room 805Shanghai China, 201103</span>
                </div>
                <div class="flex flex-col gap-2 self-stretch">
                  <span class="font-light text-base text-[#898989]">Phone</span>
                  <span class="font-light text-base text-white">+86 21 3462 7199</span>
                </div>
                <div class="flex flex-col gap-2 self-stretch">
                  <span class="font-light text-base text-[#898989]">Fax</span>
                  <span class="font-light text-base text-white">+86 21 3462 7200</span>
                </div>
                <div class="flex flex-col gap-2 self-stretch">
                  <span class="font-light text-base text-[#898989]">Mail</span>
                  <span class="font-light text-base text-white">mail@bguchina.com</span>
                </div>
              </div>
              <div class="h-10 flex items-center gap-4 px-4 py-2 rounded-[36px] border border-solid border-white">
                <span class="font-normal text-base text-white">buchiglas.cn</span>
                <div class="w-4 h-4">
                  <div class="w-4 h-4"></div>
                </div>
              </div>
            </div>
          </div>

</div>

        <div class="flex items-center gap-6 self-stretch px-14">
          <div class="mb-7  flex grow w-full h-[620px] bg-[#4f4f4f] px-6 py-12 rounded-lg">
            <div class="flex flex-col justify-between self-stretch grow">
              <div class="flex flex-col gap-6 self-stretch">
                <span class="font-light text-[32px] leading-[40px] text-white">India</span>
                <div class="flex flex-col gap-2 self-stretch">
                  <span class="font-light text-base text-[#898989]">Adress</span>
                  <span class="font-light text-base text-white">Buchiglas India Pvt. Ltd.Unit No. 712, Centrum IT Park,S G Barve Road, Opp. Raila Devi Lake,Wagle Industrial Estate, Thane 400 604</span>
                </div>
                <div class="flex flex-col gap-2 self-stretch">
                  <span class="font-light text-base text-[#898989]">Phone</span>
                  <span class="font-light text-base text-white">+91 22 2081 7778/ 79</span>
                </div>
                <div class="flex flex-col gap-2 self-stretch">
                  <span class="font-light text-base text-[#898989]">Fax</span>
                  <span class="font-light text-base text-white">+91 22 4601 3676</span>
                </div>
                <div class="flex flex-col gap-2 self-stretch">
                  <span class="font-light text-base text-[#898989]">Mail</span>
                  <span class="font-light text-base text-white">buchi@buchiglas.in</span>
                </div>
              </div>
              <div class="h-10 flex items-center gap-4 px-4 py-2 rounded-[36px] border border-solid border-white">
                <span class="font-normal text-base text-white">buchiglas.in</span>
                <div class="w-4 h-4">
                  <div class="w-4 h-4"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="mb-7  flex grow w-full h-[620px] bg-[#4f4f4f] px-6 py-12 rounded-lg">
            <div class="flex flex-col justify-between self-stretch grow">
              <div class="flex flex-col gap-6 self-stretch">
                <span class="font-light text-[32px] leading-[40px] text-white">Poland</span>
                <div class="flex flex-col gap-2 self-stretch">
                  <span class="font-light text-base text-[#898989]">Adress</span>
                  <span class="font-light text-base text-white">IKA POLul. Przy Bazantarni 4/6Warszawa, 02-793</span>
                </div>
                <div class="flex flex-col gap-2 self-stretch">
                  <span class="font-light text-base text-[#898989]">Phone</span>
                  <span class="font-light text-base text-white">+48 22 649 24 05</span>
                </div>
                <div class="flex flex-col gap-2 self-stretch">
                  <span class="font-light text-base text-[#898989]">Fax</span>
                  <span class="font-light text-base text-white">+48 22 859 14 39</span>
                </div>
                <div class="flex flex-col gap-2 self-stretch">
                  <span class="font-light text-base text-[#898989]">Mail</span>
                  <span class="font-light text-base text-white">info@ikapol.pl</span>
                </div>
              </div>
              <div class="h-10 flex items-center gap-4 px-4 py-2 rounded-[36px] border border-solid border-white">
                <span class="font-normal text-base text-white">ikapol.pl</span>
                <div class="w-4 h-4">
                  <div class="w-4 h-4"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="mb-7  flex grow w-full h-[620px] bg-[#4f4f4f] px-6 py-12 rounded-lg">
            <div class="flex flex-col justify-between self-stretch grow">
              <div class="flex flex-col gap-6 self-stretch">
                <span class="font-light text-[32px] leading-[40px] text-white">Great Britain</span>
                <div class="flex flex-col gap-2 self-stretch">
                  <span class="font-light text-base text-[#898989]">Adress</span>
                  <span class="font-light text-base text-white">Ken Kimble (Reactor Vessels Ltd.)85, Lakesview International Business Park, 98 Thomas WayHersden, CanterburyCT3 4NH</span>
                </div>
                <div class="flex flex-col gap-2 self-stretch">
                  <span class="font-light text-base text-[#898989]">Phone</span>
                  <span class="font-light text-base text-white">0044 / (0)1 / 227 / 710274</span>
                </div>
                <div class="flex flex-col gap-2 self-stretch">
                  <span class="font-light text-base text-[#898989]">Fax</span>
                  <span class="font-light text-base text-white">0044 / (0)1 / 227 / 258840</span>
                </div>
                <div class="flex flex-col gap-2 self-stretch">
                  <span class="font-light text-base text-[#898989]">Mail</span>
                  <span class="font-light text-base text-white">general@kenkimble.co.uk</span>
                </div>
              </div>
              <div class="h-10 flex items-center gap-4 px-4 py-2 rounded-[36px] border border-solid border-white">
                <span class="font-normal text-base text-white">kenkimble.co.uk</span>
                <div class="w-4 h-4">
                  <div class="w-4 h-4"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="mb-7  flex grow w-full h-[620px] bg-[#4f4f4f] px-6 py-12 rounded-lg">
            <div class="flex flex-col justify-center gap-6 grow">
              <span class="font-light text-[32px] leading-[40px] text-white">Taiwan</span>
              <div class="flex flex-col gap-2 self-stretch">
                <span class="font-light text-base text-[#898989]">Adress</span>
                <span class="font-light text-base text-white">Kou Fua Technology Co., Ltd.5F-3, 505 Kwang Fu S. RoadTaipei, 110</span>
              </div>
              <div class="flex flex-col gap-2 self-stretch">
                <span class="font-light text-base text-[#898989]">Phone</span>
                <span class="font-light text-base text-white">(02) 2758-9301</span>
              </div>
              <div class="flex flex-col gap-2 self-stretch">
                <span class="font-light text-base text-[#898989]">Fax</span>
                <span class="font-light text-base text-white">(02) 2758-0782</span>
              </div>
              <div class="flex flex-col gap-2 self-stretch">
                <span class="font-light text-base text-[#898989]">Mail</span>
                <span class="font-light text-base text-white">mail@koufua.com.tw</span>
              </div>
            </div>
          </div>
        </div>

        <div class="flex items-center gap-6 self-stretch px-14">
          <div class="mb-7  flex grow w-full h-[620px] bg-[#4f4f4f] px-6 py-12 rounded-lg">
            <div class="flex flex-col justify-between self-stretch grow">
              <div class="flex flex-col gap-6 self-stretch">
                <span class="font-light text-[32px] leading-[40px] text-white">Turkey</span>
                <div class="flex flex-col gap-2 self-stretch">
                  <span class="font-light text-base text-[#898989]">Adress</span>
                  <span class="font-light text-base text-white">Kovalent Ltd.Kizkulesi Sokak No. 21/5, GaziosmanpasaAnkara, TR</span>
                </div>
                <div class="flex flex-col gap-2 self-stretch">
                  <span class="font-light text-base text-[#898989]">Phone</span>
                  <span class="font-light text-base text-white">+90-312-4463135</span>
                </div>
                <div class="flex flex-col gap-2 self-stretch">
                  <span class="font-light text-base text-[#898989]">Fax</span>
                  <span class="font-light text-base text-white">+90-532-549 1237</span>
                </div>
                <div class="flex flex-col gap-2 self-stretch">
                  <span class="font-light text-base text-[#898989]">Mail</span>
                  <span class="font-light text-base text-white">Satis@Kovalentlab.com</span>
                </div>
              </div>
              <div class="h-10 flex items-center gap-4 px-4 py-2 rounded-[36px] border border-solid border-white">
                <span class="font-normal text-base text-white">Kovalentlab.com</span>
                <div class="w-4 h-4">
                  <div class="w-4 h-4"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="mb-7  flex grow w-full h-[620px] bg-[#4f4f4f] px-6 py-12 rounded-lg">
            <div class="flex flex-col justify-between self-stretch grow">
              <div class="flex flex-col gap-6 self-stretch">
                <span class="font-light text-[32px] leading-[40px] text-white">Russia</span>
                <div class="flex flex-col gap-2 self-stretch">
                  <span class="font-light text-base text-[#898989]">Adress</span>
                  <span class="font-light text-base text-white">LABCHIMTECH LTD.P.O. Box 90Moscow, 127282</span>
                </div>
                <div class="flex flex-col gap-2 self-stretch">
                  <span class="font-light text-base text-[#898989]">Phone</span>
                  <span class="font-light text-base text-white">+7 495 66299 90</span>
                </div>
                <div class="flex flex-col gap-2 self-stretch">
                  <span class="font-light text-base text-[#898989]">Fax</span>
                  <span class="font-light text-base text-white">+7 495 66299 90</span>
                </div>
                <div class="flex flex-col gap-2 self-stretch">
                  <span class="font-light text-base text-[#898989]">Mail</span>
                  <span class="font-light text-base text-white">info@labxt.ru</span>
                </div>
              </div>
              <div class="h-10 flex items-center gap-4 px-4 py-2 rounded-[36px] border border-solid border-white">
                <span class="font-normal text-base text-white">labxt.ru</span>
                <div class="w-4 h-4">
                  <div class="w-4 h-4"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="mb-7  flex grow w-full h-[620px] bg-[#4f4f4f] px-6 py-12 rounded-lg">
            <div class="flex flex-col justify-between self-stretch grow">
              <div class="flex flex-col gap-6 self-stretch">
                <span class="font-light text-[32px] leading-[40px] text-white">Norway</span>
                <div class="flex flex-col gap-2 self-stretch">
                  <span class="font-light text-base text-[#898989]">Adress</span>
                  <span class="font-light text-base text-white">Nerliens Meszansky ASØkernveien 121NO-0579OSLO</span>
                </div>
                <div class="flex flex-col gap-2 self-stretch">
                  <span class="font-light text-base text-[#898989]">Phone</span>
                  <span class="font-light text-base text-white">+47 22 66 65 00</span>
                </div>
                <div class="flex flex-col gap-2 self-stretch">
                  <span class="font-light text-base text-[#898989]">Fax</span>
                  <span class="font-light text-base text-white">+47 22 66 65 01</span>
                </div>
                <div class="flex flex-col gap-2 self-stretch">
                  <span class="font-light text-base text-[#898989]">Mail</span>
                  <span class="font-light text-base text-white">info@nmas.no</span>
                </div>
              </div>
              <div class="h-10 flex items-center gap-4 px-4 py-2 rounded-[36px] border border-solid border-white">
                <span class="font-normal text-base text-white">nmas.no</span>
                <div class="w-4 h-4">
                  <div class="w-4 h-4"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="mb-7  flex grow w-full h-[620px] bg-[#4f4f4f] px-6 py-12 rounded-lg">
            <div class="flex flex-col justify-center gap-6 grow">
              <span class="font-light text-[32px] leading-[40px] text-white">France</span>
              <div class="flex flex-col gap-2 self-stretch">
                <span class="font-light text-base text-[#898989]">Adress</span>
                <span class="font-light text-base text-white">Optimus Instruments3 Rue de EmbrunsBlainville sur Orne, 14550</span>
              </div>
              <div class="flex flex-col gap-2 self-stretch">
                <span class="font-light text-base text-[#898989]">Phone</span>
                <span class="font-light text-base text-white">+33 (0)6 84 26 97 96</span>
              </div>
              <div class="flex flex-col gap-2 self-stretch">
                <span class="font-light text-base text-[#898989]">Fax</span>
                <span class="font-light text-base text-white">+32 (0)3 744 02 37</span>
              </div>
              <div class="flex flex-col gap-2 self-stretch">
                <span class="font-light text-base text-[#898989]">Mail</span>
                <span class="font-light text-base text-white">loic.bouteloup@optimus-instruments.com</span>
              </div>
            </div>
          </div>
        </div>

        <div class="flex items-center gap-6 self-stretch px-14">
          <div class="mb-7  flex grow w-full h-[620px] bg-[#4f4f4f] px-6 py-12 rounded-lg">
            <div class="flex flex-col justify-center gap-6 grow">
              <span class="font-light text-[32px] leading-[40px] text-white">Belgium</span>
              <div class="flex flex-col gap-2 self-stretch">
                <span class="font-light text-base text-[#898989]">Adress</span>
                <span class="font-light text-base text-white">Optimus InstrumentsHospitaalstraat 35SteendorpB-9140</span>
              </div>
              <div class="flex flex-col gap-2 self-stretch">
                <span class="font-light text-base text-[#898989]">Phone</span>
                <span class="font-light text-base text-white">+32 3 744 05 02</span>
              </div>
              <div class="flex flex-col gap-2 self-stretch">
                <span class="font-light text-base text-[#898989]">Fax</span>
                <span class="font-light text-base text-white">+32 3 744 02 37</span>
              </div>
              <div class="flex flex-col gap-2 self-stretch">
                <span class="font-light text-base text-[#898989]">Mail</span>
                <span class="font-light text-base text-white">info@optimus.be</span>
              </div>
            </div>
          </div>
          <div class="mb-7  flex grow w-full h-[620px] bg-[#4f4f4f] px-6 py-12 rounded-lg">
            <div class="flex flex-col justify-between self-stretch grow">
              <div class="flex flex-col gap-6 self-stretch">
                <span class="font-light text-[32px] leading-[40px] text-white">Belgium</span>
                <div class="flex flex-col gap-2 self-stretch">
                  <span class="font-light text-base text-[#898989]">Adress</span>
                  <span class="font-light text-base text-white">EURO-SCIENTIFIC 
        Lerenveld 12 
        2547 Lint</span>
                </div>
                <div class="flex flex-col gap-2 self-stretch">
                  <span class="font-light text-base text-[#898989]">Phone</span>
                  <span class="font-light text-base text-white">+ 32 3 489 32 42</span>
                </div>
                <div class="flex flex-col gap-2 self-stretch">
                  <span class="font-light text-base text-[#898989]">Mobile</span>
                  <span class="font-light text-base text-white">+32 475 78 97 53</span>
                </div>
                <div class="flex flex-col gap-2 self-stretch">
                  <span class="font-light text-base text-[#898989]">Mail</span>
                  <span class="font-light text-base text-white">dvg@euro-scientific.be</span>
                </div>
              </div>
              <div class="h-10 flex items-center gap-4 px-4 py-2 rounded-[36px] border border-solid border-white">
                <span class="font-normal text-base text-white">euro-scientific.be</span>
                <div class="w-4 h-4">
                  <div class="w-4 h-4"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="mb-7  flex grow w-full h-[620px] bg-[#4f4f4f] px-6 py-12 rounded-lg">
            <div class="flex flex-col justify-between self-stretch grow">
              <div class="flex flex-col gap-6 self-stretch">
                <span class="font-light text-[32px] leading-[40px] text-white">Slovenia</span>
                <div class="flex flex-col gap-2 self-stretch">
                  <span class="font-light text-base text-[#898989]">Adress</span>
                  <span class="font-light text-base text-white">Breg pri Polzeli 45 bPolzelaSI-3313</span>
                </div>
                <div class="flex flex-col gap-2 self-stretch">
                  <span class="font-light text-base text-[#898989]">Phone</span>
                  <span class="font-light text-base text-white">+386 3 705 09 80
        +386 3 705 09 81</span>
                </div>
                <div class="flex flex-col gap-2 self-stretch">
                  <span class="font-light text-base text-[#898989]">Fax</span>
                  <span class="font-light text-base text-white">+386 3 572 22 07</span>
                </div>
                <div class="flex flex-col gap-2 self-stretch">
                  <span class="font-light text-base text-[#898989]">Mail</span>
                  <span class="font-light text-base text-white">info@primalab.si</span>
                </div>
              </div>
              <div class="h-10 flex items-center gap-4 px-4 py-2 rounded-[36px] border border-solid border-white">
                <span class="font-normal text-base text-white">primalab.si</span>
                <div class="w-4 h-4">
                  <div class="w-4 h-4"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="mb-7  flex grow w-full h-[620px] bg-[#4f4f4f] px-6 py-12 rounded-lg">
            <div class="flex flex-col justify-between self-stretch grow">
              <div class="flex flex-col gap-6 self-stretch">
                <span class="font-light text-[32px] leading-[40px] text-white">Croatia</span>
                <div class="flex flex-col gap-2 self-stretch">
                  <span class="font-light text-base text-[#898989]">Adress</span>
                  <span class="font-light text-base text-white">Ru-Ve d.o.o.Prosinačka 14Sv.Nedjelja10431</span>
                </div>
                <div class="flex flex-col gap-2 self-stretch">
                  <span class="font-light text-base text-[#898989]">Phone</span>
                  <span class="font-light text-base text-white">+385(0)1-333-52-55</span>
                </div>
                <div class="flex flex-col gap-2 self-stretch">
                  <span class="font-light text-base text-[#898989]">Fax</span>
                  <span class="font-light text-base text-white">+385(0)1-333-52-59</span>
                </div>
                <div class="flex flex-col gap-2 self-stretch">
                  <span class="font-light text-base text-[#898989]">Mail</span>
                  <span class="font-light text-base text-white">hrvoje.runje@ru-ve.hr</span>
                </div>
              </div>
              <div class="h-10 flex items-center gap-4 px-4 py-2 rounded-[36px] border border-solid border-white">
                <span class="font-normal text-base text-white">ru-ve.hr</span>
                <div class="w-4 h-4">
                  <div class="w-4 h-4"></div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="flex items-center gap-6 self-stretch px-14">
          <div class="mb-7  flex grow w-full h-[620px] bg-[#4f4f4f] px-6 py-12 rounded-lg">
            <div class="flex flex-col justify-center gap-6 grow">
              <span class="font-light text-[32px] leading-[40px] text-white">Hungary</span>
              <div class="flex flex-col gap-2 self-stretch">
                <span class="font-light text-base text-[#898989]">Adress</span>
                <span class="font-light text-base text-white">Spektrum 3D, Chemical &amp; Laboratory equipmentsSimon L u. åDebrecen4034</span>
              </div>
              <div class="flex flex-col gap-2 self-stretch">
                <span class="font-light text-base text-[#898989]">Phone</span>
                <span class="font-light text-base text-white">003652521131</span>
              </div>
              <div class="flex flex-col gap-2 self-stretch">
                <span class="font-light text-base text-[#898989]">Fax</span>
                <span class="font-light text-base text-white">003652470069</span>
              </div>
              <div class="flex flex-col gap-2 self-stretch">
                <span class="font-light text-base text-[#898989]">Mail</span>
                <span class="font-light text-base text-white">info@spektrum-3d.hu</span>
              </div>
            </div>
          </div>
          <div class="mb-7  flex grow w-full h-[620px] bg-[#4f4f4f] px-6 py-12 rounded-lg">
            <div class="flex flex-col justify-between self-stretch grow">
              <div class="flex flex-col gap-6 self-stretch">
                <span class="font-light text-[32px] leading-[40px] text-white">Finland</span>
                <div class="flex flex-col gap-2 self-stretch">
                  <span class="font-light text-base text-[#898989]">Adress</span>
                  <span class="font-light text-base text-white">Ditap Oy / Rembe OyHitsaajankatu 4C00810 Helsinki</span>
                </div>
                <div class="flex flex-col gap-2 self-stretch">
                  <span class="font-light text-base text-[#898989]">Phone</span>
                  <span class="font-light text-base text-white">+358 10 6662345</span>
                </div>
                <div class="flex flex-col gap-2 self-stretch">
                  <span class="font-light text-base text-[#898989]">GSM</span>
                  <span class="font-light text-base text-white">+358 50 4005858</span>
                </div>
                <div class="flex flex-col gap-2 self-stretch">
                  <span class="font-light text-base text-[#898989]">Mail</span>
                  <span class="font-light text-base text-white">pasi.ponsi@ditap.fipasi.ponsi@rembe.fi</span>
                </div>
              </div>
              <div class="h-10 flex items-center gap-4 px-4 py-2 rounded-[36px] border border-solid border-white">
                <span class="font-normal text-base text-white">ditap.fi</span>
                <div class="w-4 h-4">
                  <div class="w-4 h-4"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="mb-7  flex grow w-full h-[620px] bg-[#4f4f4f] px-6 py-12 rounded-lg">
            <div class="flex flex-col justify-between self-stretch grow">
              <div class="flex flex-col gap-2.5 self-stretch">
                <div class="flex flex-col gap-6 self-stretch">
                  <span class="font-light text-[32px] leading-[40px] text-white">Spain</span>
                  <div class="flex flex-col gap-2 self-stretch">
                    <span class="font-light text-base text-[#898989]">Adress</span>
                    <span class="font-light text-base text-white">Suministros Nesslab S.LPassatge dels Ametllers 17 Local 208290 Cerdanyola del VallèsBarcelona</span>
                  </div>
                  <div class="flex flex-col gap-2 self-stretch">
                    <span class="font-light text-base text-[#898989]">Phone</span>
                    <span class="font-light text-base text-white">+386 3 705 09 80
        +386 3 705 09 81</span>
                  </div>
                  <div class="flex flex-col gap-2 self-stretch">
                    <span class="font-light text-base text-[#898989]">Mail</span>
                    <span class="font-light text-base text-white">comercial@nesslab.es</span>
                  </div>
                </div>
              </div>
              <div class="h-10 flex items-center gap-4 px-4 py-2 rounded-[36px] border border-solid border-white">
                <span class="font-normal text-base text-white">nesslab.es</span>
                <div class="w-4 h-4">
                  <div class="w-4 h-4"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="mb-7  flex grow w-full h-[620px] bg-transparent px-6 py-12 rounded-lg">

          </div>
        </div>


<div class="w-full justify-between items-end mb-12">
    <div class="px-16 max-w-max mt-28 justify-start items-center">
        <a href="/" class="group transition-all duration-1000 px-4 py-2 rounded-3xl border border-neutral-600 text-sm font-normal leading-tight flex justify-start items-center hover:bg-[#4F4F4F] hover:text-white">
            <svg class="transition-all duration-300 w-4 h-4 float-left mr-2 text-black group-hover:text-white group-hover:w-6 group-hover:h-4 group-hover:mr-4 group-hover:scale-150" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.85355 3.14645C7.04882 3.34171 7.04882 3.65829 6.85355 3.85355L3.70711 7H12.5C12.7761 7 13 7.22386 13 7.5C13 7.77614 12.7761 8 12.5 8H3.70711L6.85355 11.1464C7.04882 11.3417 7.04882 11.6583 6.85355 11.8536C6.65829 12.0488 6.34171 12.0488 6.14645 11.8536L2.14645 7.85355C1.95118 7.65829 1.95118 7.34171 2.14645 7.14645L6.14645 3.14645C6.34171 2.95118 6.65829 2.95118 6.85355 3.14645Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
            Back home
        </a>
    </div>
</div>

</main>
<?php endwhile; endif; ?>


<?php
get_footer();
?>