
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <title>Company Membership Form Pdf</title>
    {{--<link rel="stylesheet" href="{{ asset('front/pdf_assets/css/style.css') }}">--}}
    <style>
        body {
            margin: 0;
            padding: 0;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            font-family: 'Mukta', sans-serif;

        }

        .absolute {
            position: absolute;
        }

        .letterpad-company-section {
            font-size: 14px;
            width: 793.5px;
            height: 1122.5px;
            position: relative;
            background: url("https://scontent.fktm8-1.fna.fbcdn.net/v/t1.15752-9/126037951_1512196009170529_8777271674464586952_n.png?_nc_cat=110&ccb=2&_nc_sid=ae9488&_nc_ohc=A9y4xZSnNvoAX_asJcG&_nc_ht=scontent.fktm8-1.fna&oh=e20121f9f3e393cf9fbd70d65a9cb8ae&oe=5FDB2EE9") no-repeat;
            background-position: center;
            background-size: cover;
        }

        .subject{
            top: 200px;
            margin: 0 auto;
            left: 0;
            right: 0;
            text-align: center;
            font-weight: 700;
            font-size: 15px;
        }
        .salutation{
            top: 232px;
            left: 105px;
            text-align: center;
            font-weight: 700;
            font-size: 15px;
        }

    </style>
</head>
<body>
<div class="letterpad-company-section">

    <div>
        <div class="subject absolute">
            Subject: {{ $mail->subject??'' }}
        </div>

        <div class="salutation absolute">
            {{ $mail->salutation??'' }} {{ $mail->name??'' }}
            नेपालमा सहकारी सुरु भएको चार दशक पुगिसकेको छ । यस दौरानमा ३५ हजार भन्दा बढि सहकारी संघ संस्थाहरु दर्ता भई संचालनमा रहेका छन् । ६० लाखभन्दा बढी व्यक्तिहरु सहकारीमा सदस्य भएर कारोबार गर्छन । सहरदेखि ग्रामिण क्षेत्रमा पनि सहकारी संस्थाहरु सफल रुपमा संचालित छन् । सहकारीमा हुने वित्तीय कारोबारमा दिन प्रतिदिन वृद्धि हुँदै गैरहेको छ । सर्वसाधरण जनताको सहकारीमा पहुँच सजिलो सहज हुने हुँदा आम नागरिकको सहकारीमा आकर्षण बढेको विश्वाश गर्न सकिन्छ । तथापि सहकारी क्षेत्रमा हुने आर्थिक तथा गैर आर्थिक कारोबारहरु प्रविधि सम्पन्न छैनन् भन्ने गुनासो छ । आजको युग उन्नत प्रविधिको युग हो । प्रविधिकै कारण नगद बिना नै आर्थिक कारोबार गर्ने प्रचलन सुरु भएको छ । नगद लिने, दिने, जम्मा गर्ने भूक्तानी गर्ने जस्ता झन्झटले कारोबारमा जोखिम बढाएको छ । ग्रामिण भेगमा बस्ने बासिन्दाहरुलाई दिन भरी हिँडेर रकम झिक्ने, जम्मा गर्ने र चेक सटही गर्नुपर्ने वाध्यता छ । हाम्रो दैनिक उपभोगमा प्रयोग हुने सर सामान खरिद गर्दा गरिने भूक्तानी, घरायसी एवं कार्यालयको विलहरु भूक्तानी, बस, यातायातका साधनहरुको टिकट, हवाईजहाज, भ्रमण आदिका टिकट, स्कूल कलेज, विमा आदिमा तिर्नु पर्ने फी, शुल्क, नेपाल भित्र वा बाहिरबाट रकम पठाउन एवं प्राप्त गर्ने लगायतका सम्पूर्ण काम नविन प्रविधि एवं विद्युतीय माध्यमबाट गर्न सकिने भएता पनि हालसम्म सहकारी क्षेत्रमा यस किसिमको प्रविधिको प्रयोग भएको छैन । वास्तवमा उल्लेखित सम्पूर्ण समस्याहरुको एकमुष्ठ समाधानका लागि नविन सूचना प्रविधि क्षेत्रमा महत्वपूर्ण योगदान गर्ने अनुभवि, लब्ध प्रतिष्ठित व्यक्तिहरुको सक्रियतामा यस हब कोअपरेटिभ सर्भिस लि. संस्थाको नेपाल सरकार सहकारी विभागमा दर्ता गरी संचालन गरिएको छ । यस हबको अपरेटिभ सर्भिस लि.को संजाल अन्तरगत रहेका सहकारी संघ संस्था एवं व्यक्तिहरुले संजाल भित्र कै अर्को सहकारी संघ संस्थाबाट चेक सटही, रकम जम्मा र भूक्तानी गर्न सक्नेछन् । आफूले प्रयोग गर्ने मोबाईलबाट पनि सबै किसिमका कारोबार गर्न सक्नेछन् । नेपालभर संचालित वित्तीय एवं गैर वित्तीय सहकारी संघ संस्था, त्यसका सदस्य एवं आमनागरिकहरु लाई यस किसिमको सेवा प्रवाह गर्ने पहिलो सहकारी नै यस हब कोअपरेटिभ सर्भिस लिमिटेड भएको छ । यस हब कोअपरेटिभ सर्भिस लिमिटेड संस्थाले आफ्नो संजालमा रहेका सबै सहकारी संघ संस्थाहरुलाई प्रविधि सम्पन्न गराउने, शुसासनकालागि आवश्यक नीति, विधि, प्रविधि र दक्ष जनशक्ति व्यवस्थापन एवम् प्रभावकारी सूचना प्रकाशनमा समेत उत्तिकै योगदान पुर्‍याउने लक्ष्य राखेको छ । हरेक सहकारीका सदस्यहरुका लागि उपयुक्त, सुरक्षित, भरपर्दो, छिटो छरितो र कम खर्चिलो e-payments का योजनाहरुका साथ हामी सहकारी संघ संस्था एवं सदस्यहरुमाझ आएका छौं । सहकारी दर्शन, मूल्य तथा सिद्धान्तहरुलाई आत्मसात गर्दै सहकारी संस्थामा सहभागी सदस्यहरुको आर्थिक सामाजिक विकास एवं समृद्ध जीवनका लागि काम गर्ने हाम्रो उद्देश्य एवं प्रतिवद्धता रहेको छ । नेपालभर सञ्चालित सम्पूर्ण सहकारी संघ संस्थाहरुलाई यस विद्युतिय भूक्तानी सञ्जालमा आद्ध रहेर समुन्नत सहकारी समुदाय निर्माणमा योगदान पुर्‍याउन हार्दिक आव्हान गर्दछु ।
        </div>
    </div>

</div>

</body>
</html>