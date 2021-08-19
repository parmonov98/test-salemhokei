
<div id="schools_page__desc" class="form-modal" style="display:none">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#russian-{{$textItems->firstWhere('element_id', 'schools_page__desc_ru')->element_id}}">Русский</a></li>
        <li><a data-toggle="tab" href="#kazakh-{{$textItems->firstWhere('element_id', 'schools_page__desc_kk')->element_id}}">Қазақша</a></li>
    </ul>

    <div class="tab-content">
        <div id="russian-{{$textItems->firstWhere('element_id', 'schools_page__desc_ru')->element_id}}" class="tab-pane fade in active">
            <p id="{{$textItems->firstWhere('element_id', 'schools_page__desc_ru')->element_id}}" contenteditable="false"
               data-url="{{route('text.update', $textItems->firstWhere('element_id', 'schools_page__desc_ru')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'schools_page__desc_ru')->content !!}
            </p>
        </div>
        <div id="kazakh-{{$textItems->firstWhere('element_id', 'schools_page__desc_kk')->element_id}}" class="tab-pane fade">
            <p id="{{$textItems->firstWhere('element_id', 'schools_page__desc_kk')->element_id }}"  contenteditable="false"
               data-url="{{route('text.update', $textItems->firstWhere('element_id', 'schools_page__desc_kk')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'schools_page__desc_kk')->content !!}
            </p>
        </div>

    </div>
</div>


