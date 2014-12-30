���T<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:237:"SELECT   wp_posts.* FROM wp_posts  WHERE 1=1  AND ( ( YEAR( post_date ) = 2013 AND MONTH( post_date ) = 9 ) ) AND wp_posts.post_name = 'open-source-licenser-kort-fortalt' AND wp_posts.post_type = 'post'  ORDER BY wp_posts.post_date DESC ";s:11:"last_result";a:1:{i:0;O:8:"stdClass":23:{s:2:"ID";s:1:"7";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2013-09-10 11:47:35";s:13:"post_date_gmt";s:19:"2013-09-10 11:47:35";s:12:"post_content";s:8065:"Kommer du også i tvivl om hvad forskellen på de forskellige open source / fri software licenser egentlig er? Her er en guide, som forhåbentlig kan hjælpe dig på vej.

Samlet set får du med open source eller fri software programmer mulighed for at undersøge koderne bag programmerne. Desuden er du fri for de købsomkostninger og licensafgifter, som man typisk betaler for proprietære produkter. Udover det, sætter de forskellige licenser hver deres ramme for, hvordan du må ændre og videredele koderne.

Carsten Agger har i artiklen @todo: insert link skrevet mere overordnet om gode grunde til at vælge fri eller open source software.

Der findes efterhånden mange forskellige licenser at vælge mellem, for overskuelighedens skyld har vi valgt tre, som burde dække de fleste behov.
<div class="foss-rules well">
<h4>Krav: dette <em>skal</em> du</h4>
<ul class="foss-must">
	<li>Angive licens og copyright</li>
	<li>Angive ændringer</li>
	<li>Publicere kildekode</li>
</ul>
<h4>Tilladt: dette <em>må</em> du</h4>
<ul class="foss-allowed">
	<li>Kommerciel anvendelse</li>
	<li>Ændre</li>
	<li>Distribuere</li>
	<li>Patent Grant @todo: oversæt?</li>
</ul>
<h4>Forbudt: dette må du ikke</h4>
<ul class="foss-forbidden">
	<li>Ansvarligholde</li>
	<li>Sublicensing @todo: oversæt?</li>
</ul>
</div>
<h2>GNU General Public License (GPL)</h2>
GPL licensen blev oprindeligt skrevet af Richard Stallman fra Free Software Foundation til GNU-projektet. Det er den mest benyttede fri software-licens og er blevet benyttet bl.a. til Linux og MySQL. Licensen adskiller sig fra andre licenser ved at være <em>copyleft </em>og<em> restriktiv</em>. Det vil bl.a. sige at licensen kræver, at evt. ændringer i koden skal frigives på samme vilkår som den oprindelige kode. Hvis man ændrer og/eller videreformidler koden, skal man huske at angive de oprindelige forfattere.
<h3>Hvornår er det en god idé at bruge GPL?</h3>
Man vil typisk benytte sig af GPL licensen hvis man gerne vil sikre sig, at ens software <em>samt eventuelle ændringer og tilføjelser som andre måtte lave</em> forbliver under selv samme licens. Dermed sikrer man sig mod, at andre tager patent på det program man har udviklet og man forhindrer at det kan "lukkes inde" i et program med andre licensbetingelser .
<h3>Hvornår er det en dårlig idé at bruge GPL?</h3>
Det er ikke nødvendigvis en god idé at bruge GPL, hvis man ønsker, at ens software bliver brugt af så mange som muligt, så hurtigt som muligt. Det kan være, at man vil udbrede en ny standard inden for et område eller bare ikke ønsker at lægge nogen former for begrænsninger på brugen af softwaren. Så bør man bruge en mere enkel, permissiv licens, f.eks. MIT, som er beskrevet nedenfor. Hvis softwaren arbejder sammen med andet software som ikke er frigivet under GPL, kan man evt. bruge <a title="Lesser GPL Wikipedia artikel" href="http://en.wikipedia.org/wiki/GNU_Lesser_General_Public_License" target="_blank">LGPL</a>, som er lavet til dette formål.

<a title="GPL v.3 license" href="http://www.gnu.org/licenses/gpl-3.0.txt" target="_blank">GPL v.3 license text</a>
<div class="foss-rules well">
<h4>Krav: dette <em>skal</em> du</h4>
<ul class="foss-must">
	<li>Angive licens og copyright</li>
	<li>Angive ændringer</li>
</ul>
<h4>Tilladt: dette <em>må</em> du</h4>
<ul class="foss-allowed">
	<li>Kommerciel anvendelse</li>
	<li>Ændre</li>
	<li>Distribuere</li>
	<li>Sublicensing @todo: oversæt?</li>
	<li>Patent Grant @todo: oversæt?</li>
</ul>
<h4>Forbudt: dette må du ikke</h4>
<ul class="foss-forbidden">
	<li>Ansvarligholde</li>
	<li>Bruge varemærker</li>
</ul>
</div>
<h2>Apache License</h2>
Denne licens giver ligesom GPL brugeren mulighed for at distribuere og ændre i koderne. Blot skal man huske at angive de steder, der er ændret, samt at beholde den oprindelige licens de steder, der ikke er ændret. Apache licensen giver i modsætning til GPL lov til at videredele ændringer <em>under en anden licens. </em>Version 2.0 er kombatibel med GPL v.3, hvis det samlede projekt frigives som GPL v.3.
<h3>Hvornår er det en god idé at bruge Apache License?</h3>
Licensen bruges ofte som en permissiv licens, hvor der er retningslinjer udspecificeret for varemærker (trademarks), patenter og copyright. Man kan med fordel benytte sig af Apache, hvis man ønsker en permissiv licens og samtidig vil være juridisk sikret i forhold til copyright og evt. patenter, der måtte være i spil.
<h3>Hvornår er det en dårlig idé at bruge Apache License?</h3>
Hvis man ønsker at alle fremtidige ændringer til softwaren skal være tilgængelige for alle, skal man ikke vælge denne licens.  Apache licensen er på 4 sider med mange tekniske udtryk. Hvis man ønsker en kort, letfattelig ikke-juridisk bindende licens, kan man evt. vælge MIT-licensen.

<a title="Apache License 2.0" href="http://www.apache.org/licenses/LICENSE-2.0" target="_blank">Apache License 2.0</a>
<div class="foss-rules well">
<h4>Krav: dette <em>skal</em> du</h4>
<ul class="foss-must">
	<li>Angive licens og copyright</li>
</ul>
<h4>Tilladt: dette <em>må</em> du</h4>
<ul class="foss-allowed">
	<li>Kommerciel anvendelse</li>
	<li>Ændre</li>
	<li>Distribuere</li>
	<li>Sublicensing @todo: oversæt?</li>
</ul>
<h4>Forbudt: dette må du ikke</h4>
<ul class="foss-forbidden">
	<li>Ansvarligholde</li>
</ul>
</div>
<h2>MIT License</h2>
MIT-licensen tillader brugeren at gøre hvad han lyster med softwaren, så længe at licens-betingelserne og copyright-noten er på plads.
<h3>Hvornår er det en god idé at bruge MIT?</h3>
MIT er et godt bud, hvis man ønsker en simpel, permissiv licens.
<h3>Hvornår er det en dårlig idé at bruge MIT?</h3>
Man bør ikke bruge MIT-licensen hvis man ønsker at alle fremtidige ændringer skal publiceres til alles fordel eller hvis man gerne vil have en juridisk brugbar licens i copyright eller patentsager. MIT tillader ligesom Apache at kildekode bliver brugt i "lukkede" proprietære produkter, så hvis man vil undgå dette, bør man vælge GPL.

<a title="MIT license tekst" href="http://opensource.org/licenses/MIT" target="_blank">MIT license</a>
<h2>Fri software og copyright</h2>
Måske kan det overraske at copyright-begrebet stadig har betydning i forhold til fri software licenser. Copyright-noten er vigtig, fordi den fortæller hvem der oprindeligt står bag projektet. Copyright-holderen kan stadig påberåbe sig  ret til f.eks. at ændre licenstypen af projektet. Man bør altid inkludere en copyrigt-note i sin software og man må ikke ændre eller fjerne denne information fra eksisterende projekter.
<h2>Hvilke licenser kan bruges sammen?</h2>
Hvis man arbejder på et større projekt, er det let at ende i en situation, hvor man benytter sig af adskillige frameworks med forskellige licenser. Man kan hurtigt komme i tvivl om, hvorvidt de forskellige licenser er kompatible.

Her kan du finde en grafisk illustration af, hvordan man kan kombinere licenser: <a href="http://www.dwheeler.com/essays/floss-license-slide.html">http://www.dwheeler.com/essays/floss-license-slide.html</a>.

<em>Tak for inspiration og indhold fra <a title="Githubs choosealicense.com" href="http://choosealicense.com" target="_blank">choosealicense.com</a>.</em>
<h4>Andre licenser og videre læsning</h4>
<h4></h4>
<a href="http://en.wikipedia.org/wiki/List_of_FSF_approved_software_licences">http://en.wikipedia.org/wiki/List_of_FSF_approved_software_licences</a>

<a href="http://choosealicense.com/">http://choosealicense.com/</a>

<a href="http://en.wikipedia.org/wiki/GNU_General_Public_License">http://en.wikipedia.org/wiki/GNU_General_Public_License</a>

<a href="http://dustycloud.org/blog/field-guide-to-copyleft/">http://dustycloud.org/blog/field-guide-to-copyleft/</a>

<a href="http://www.zdnet.com/blog/burnette/google-says-no-to-license-proliferation/192">http://www.zdnet.com/blog/burnette/google-says-no-to-license-proliferation/192</a>";s:10:"post_title";s:50:"Open source og fri software licenser, kort fortalt";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:33:"open-source-licenser-kort-fortalt";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2013-11-22 09:17:43";s:17:"post_modified_gmt";s:19:"2013-11-22 08:17:43";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:24:"http://os.benway.dk/?p=7";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}}s:8:"col_info";a:23:{i:0;O:8:"stdClass":13:{s:4:"name";s:2:"ID";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:1;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:11:"post_author";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:2;O:8:"stdClass":13:{s:4:"name";s:9:"post_date";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:3;O:8:"stdClass":13:{s:4:"name";s:13:"post_date_gmt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:4;O:8:"stdClass":13:{s:4:"name";s:12:"post_content";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:8065;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:5;O:8:"stdClass":13:{s:4:"name";s:10:"post_title";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:50;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:6;O:8:"stdClass":13:{s:4:"name";s:12:"post_excerpt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:7;O:8:"stdClass":13:{s:4:"name";s:11:"post_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:7;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:8;O:8:"stdClass":13:{s:4:"name";s:14:"comment_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:9;O:8:"stdClass":13:{s:4:"name";s:11:"ping_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:10;O:8:"stdClass":13:{s:4:"name";s:13:"post_password";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:11;O:8:"stdClass":13:{s:4:"name";s:9:"post_name";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:33;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:12;O:8:"stdClass":13:{s:4:"name";s:7:"to_ping";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:13;O:8:"stdClass":13:{s:4:"name";s:6:"pinged";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:14;O:8:"stdClass":13:{s:4:"name";s:13:"post_modified";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:15;O:8:"stdClass":13:{s:4:"name";s:17:"post_modified_gmt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:16;O:8:"stdClass":13:{s:4:"name";s:21:"post_content_filtered";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:17;O:8:"stdClass":13:{s:4:"name";s:11:"post_parent";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:18;O:8:"stdClass":13:{s:4:"name";s:4:"guid";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:24;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:19;O:8:"stdClass":13:{s:4:"name";s:10:"menu_order";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:20;O:8:"stdClass":13:{s:4:"name";s:9:"post_type";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:21;O:8:"stdClass":13:{s:4:"name";s:14:"post_mime_type";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:22;O:8:"stdClass":13:{s:4:"name";s:13:"comment_count";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}}s:8:"num_rows";i:1;s:10:"return_val";i:1;}