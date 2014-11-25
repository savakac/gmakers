<div class="back">
<a href="main.php?page=uvod" title="Uvodna stranka"><<</a>
</div>
<h2>Bezpečný upgrade systému</h2>

<div>Upgrade systému je věc, kterou miluji podobně, jako instalaci windows na cizí počítač. Na rozdíl od instalace windows si v tomto případě řeším zálohu systému sám. Tento blog se věnuje především přípravě systému před upgradem a samotnému upgradu.
Příprava před upgradem
Rozhodl jsem se pro upgrade systému namísto čisté instalace. Mám svoje Kubuntu 11.04 celkem vytuněné a nechci vše znovu nastavovat. Je to práce na půl dne a dolaďování detailů týdny až měsíce. Nicméně pro jistotu si připravím na USB disk alternate instalačku nového Kubuntu Precise LTS, kdyby náhodou upgrade někde selhal. Pro jistotu si na flashku přihodím asi to nejdůležitější - soubor s hesly (zašifrovaný ve vimu:-P).
Běžná záloha a očista systému
V první fázi přípravy proběhne záloha velkých dat. Velkými daty rozumějme především fotografie (spousta malých i větších souborů), hudbu a podobně. Problém zálohy fotografií spočívá v tom, že samozřejmě zálohu již mám, ale nevím, jak starou a jaké změny od posledního zálohování proběhly. Jakožto samozvaný guru nehodlám tupě mazat starou zálohu a kopírovat všechen obsah do nového adresáře a volím cestu pro mírně pokročilé. Tato cesta se jmenuje rsync. Pro zazálohování fotografií z adresáře /home/share/photo do adresáře /media/backups/photo použiji příkaz:
rsync -av --delete /home/share/photo/ /media/backups/photo
Přepínač -a zajistí zachování atributů souborů (práva, vlastník, ...). Přepínač -v zajistí vypisování operací se soubory. Pro odstranění souborů v cílovém umístění, které byly ze zdrojového smazány, slouží přepínač --delete. Protože jsem paranoidní, radši pokaždé na vyzkoušení přidávám přepínač --dry-run abych viděl, co se bude dít ještě dříve, než se to opravdu stane=)
Protože opatrnosti není nikdy dost, kopíruji data také na jiný disk na kterém je (z důvodu kompatibility) FAT. Jelikož FAT nezvládá práva, symlinky a podobně, rsync by se snažil zkopírovat téměř všechny soubory. Pro porovnávání souborů čistě na základě jejich velikostí použiji následující příkaz:
rsync -r -v --size-only --delete /home/share/photo/ /media/backups/photo
Co se očisty systému týče, jde prakticky jen o vymazání různých cache souborů. Nemá smysl se pídit po malinkatých souborech a ty větší přehledně zobrazí filelight.
Běžně jde o cache prohlížečů (chromium dnes asi neumí moc dobře, takže komplet: ~/.cache/, firefox přes Předvolby / Rozšířené / Síť / Vymazat mezipaměť webových stránek) a souborů s náhledy (pro krusader:~/.thumbnails/*/*).
Záloha systému
Jde vlastně o kompletní zálohu dat, která by případně byla třeba pro čerstvou instalaci. Jmenovitě adresáře /etc, /root, /var/www a všechny /home/*. Takto vypadá záloha mého domovského adresáře rozdělená na dva největší adresáře a pak zbytek:
# cd /home/gorgo
# tar cf - .thunderbird | gzip > /media/backups/thunderbird.tar.gz
# tar cf - prace | gzip > /media/backups/prace.tar.gz
# tar cf - --exclude='.thunderbird' --exclude='prace' ./ | gzip > /media/backups/gorgo.tar.gz
Tuto část už provádím mimo grafické rozhraní - shozená X-ka, jako root. Jednak zálohy ušetřím dočasné soubory, otevřené roury a podobně. Navíc se takto už dostávám do "instalační" nálady=) Nevýhodou v textovém prostředí je česká klávesnice, na kterou nejsem zvyklý. Píšu si poznámku (tužkou na papír bez diakritiky), abych v případě čerstvé instalace zvolil anglické rozložení.
Záloha systémového oddílu
Poslední záloha už je jen pro opravdového psychopata - pokud nebude nový systém umět nějakou zásadní věc, vezmu původní systémovou partition a plesknu ji zpět tak, jak byla těsně před instalací. Záloha:
# dd if=/dev/sdb5 of=/media/backup/sdb5.dd
Tato operace trvala z SSD partitiony na klasický disk necelých 22 minut. Průšvih nastal, když začalo docházet na cílovém disku místo, takže zběsilé mazání a vyšlo to jen taktak. Kopíruje se samozřejmě celá velikost partition, nikoliv jen velikost zaplněného prostoru. Předchozí kroky zálohy proběhly v řádu minut. K tomuhle doufám (snad tentokrát) nedojde - obnova:
# dd if=/media/backup/sdb5.dd of=/dev/sdb5
Jsem připraven! Venku se již setmělo, zhluboka se nadechnu a zapálím svícen.
Upgrade
Nevěřím grafickému klikadlu, poslední upgrade na Kubuntu 11.10 dopadla výše zmýněným koncem. A pak, že po mně nejdou! Nicméně dočetl jsem se o následujícím postupu:
apt-get update
apt-get upgrade
apt-get dist-upgrade
Předtím je ovšem třeba zaměnit všechny výskyty slova natty za precise v souboru /etc/apt/sources.list. Celkem mě zaujal nástroj pro generování /etc/apt/sources.list souboru, který by se dal použít, nebýt v hloupé konzoli. Navíc se oproti grafické utilitce vyhnu meziupgradu na 11.10.
Protože aptitude mám radši a má být chytřejší, co se řešení konfliktů týče, volím následující sekvenci:
aptitude update
aptitude upgrade
aptitude dist-upgrade
Update ok, ale poté, co upgrade spolklo všech 8G paměti a užíralo další 4G na swapu a přestalo reagovat jsem tedy polevil a zkusil výše zmíněnou apt-get cestu. Práce je poznání rychlejší, dokonce i upgrade prošel. Jenomže dist-upgrade spadl na nějakém balíčku nepomuk-cosi. A nepomoho ani opětovné spuštění s doporučeným přepínačem -f.
Pohár mé trpělivosti přetekl! Hledám USB disk s instalačkou, reboot a sbohem upgrade! Za pár desítek minut se systém bez obtíží nainstaloval. Navíc se správným rozložením klávesnice=) Jedinou výtkou budiž neustálé přerušování instalace různými dotazy. Myslel jsem, že se na začátku instalátor na vše vyptá a pak si chroustá. Je toto v grafickém instalátoru lepší?
Závěr
Upgrade systému proběhl druhou nejhorší, ale i druhou nejlepší možností. Žádné překvapení - byl jsem dobře připraven. Nyní bych si rád vyslechl, jak Vám byl můj zápisek inspirací k tomu, být lepším člověkem, co jsem udělal naprosto lamersky a jaké máte zkušenosti s upgrady *buntů nebo debianu Vy! 
</div>
