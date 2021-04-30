<h3 class="font-weight-bold">Документы</h3>
<div class="hr divider bg-madison divider-md-0"></div>

<div class="offset-lg-top-30">
    <p>Вот здесь должен быть текст вводный. Ниже дублирую текст, который был на сайте ВГАПС.</p>
    <p>  В соответствии с Постановлением Правительства Российской Федерации от 10 июля 2013 г. № 582 «Об утверждении Правил размещения на официальном сайте образовательной организации в информационно-телекоммуникационной сети «Интернет» и обновления информации об образовательной организации», Приказом Федеральной службы по надзору в сфере образования и науки от 29 мая 2014 г. № 785 «Об утверждении требований к структуре официального сайта образовательной организации в информационно-телекоммуникационной сети «Интернет» и формату представления на нем информации» размещены следующие документы:</p>
</div>


<div class="offset-top-30">
    <ul class="list-unstyled docs mt-3">
        @foreach(\App\Doc::get() as $doc)
            <li class="d-flex">
                <i class="fa fa-file-{{ $doc->info['icon'] }}-o"></i>
                <div class="d-inline-block text-black inset-left-10">{{ $doc->name }} ({{ $doc->info['type'] }}, {{ $doc->info['size'] }}кб)<br>
                    <a href="{{ asset('storage/'.config('settings.docFolder').'/'.$doc->url) }}">скачать</a>
                </div>
            </li>
        @endforeach

        <li class="d-flex">
            <i class="fa fa-file-pdf-o"></i>
            <div class="d-inline-block text-black inset-left-10">Свидетельство о государственной аккредитации (с приложениями) (при наличии) (pdf,23кб)<br>
                <a href="#">скачать</a>
            </div>
        </li>

        <li class="d-flex">
            <i class="fa fa-file-pdf-o"></i>
            <div class="d-inline-block text-black inset-left-10">Правила внутреннего распорядка обучающихся (pdf,23кб)<br>
                <a href="#">скачать</a>
            </div>
        </li>


        <li class="d-flex">
            <i class="fa fa-file-pdf-o"></i>
            <div class="d-inline-block text-black inset-left-10">Правила внутреннего трудового распорядка (pdf,23кб)<br>
                <a href="#">скачать</a>
            </div>
        </li>


        <li class="d-flex">
            <i class="fa fa-file-pdf-o"></i>
            <div class="d-inline-block text-black inset-left-10">Коллективный договор (при наличии) (pdf,23кб)<br>
                <a href="#">скачать</a>
            </div>
        </li>

        <li class="d-flex">
            <i class="fa fa-file-pdf-o"></i>
            <div class="d-inline-block text-black inset-left-10">Отчет о результатах самообследования (pdf,23кб)<br>
                <a href="#">скачать</a>
            </div>
        </li>

        <li class="d-flex">
            <i class="fa fa-file-pdf-o"></i>
            <div class="d-inline-block text-black inset-left-10">Предписания органов, осуществляющих государственный контроль (надзор) в сфере образования, отчеты об исполнении таких предписаний (до подтверждения органом, осуществляющим государственный контроль (надзор) в сфере образования, исполнения предписания или признания его недействительным в установленном законом порядке) (при наличии) (pdf,23кб)<br>
                <a href="#">скачать</a>
            </div>
        </li>

        <li class="d-flex">
            <i class="fa fa-file-pdf-o"></i>
            <div class="d-inline-block text-black inset-left-10">Локальные нормативные акты образовательной организации по основным вопросам организации и осуществления образовательной деятельности (pdf,23кб)<br>
                <a href="#">скачать</a>
            </div>
        </li>

    </ul>
</div>


