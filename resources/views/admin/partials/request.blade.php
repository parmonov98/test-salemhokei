{{--<div id="request" class="form-modal" style="display:none">--}}
{{--    <h3 class="title-primary text-center">{{ __("default.pages.modals.write_us") }}</h3>--}}
{{--    <form class="form" method="post" action="/contact_mail">--}}
{{--        {{ csrf_field() }}--}}
{{--        <div class="input-group">--}}
{{--            <input type="text" name="name" placeholder="{{ __("default.pages.modals.name") }}" class="input-regular" required>--}}
{{--        </div>--}}
{{--        <div class="input-group">--}}
{{--            <input type="tel" name="phone" placeholder="{{ __("default.pages.modals.phone") }}" onfocus="$(this).inputmask('+7 999 999 99 99')"--}}
{{--                   class="input-regular" required>--}}
{{--        </div>--}}
{{--        <div class="input-group">--}}
{{--            <input type="email" name="email" placeholder="{{ __("default.pages.modals.email") }}" class="input-regular" required>--}}
{{--        </div>--}}
{{--        <div class="input-group">--}}
{{--            <textarea name="message" placeholder="{{ __("default.pages.modals.message") }}" class="input-regular"></textarea>--}}
{{--        </div>--}}
{{--        <div class="text-center">--}}
{{--            <button type="submit" class="btn">{{ __("default.pages.modals.send") }}</button>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</div>--}}

{{--<div id="testLesson" class="form-modal" style="display:none">--}}
{{--    <h3 class="title-primary text-center">{{ __("default.pages.modals.try_lesson_title") }}</h3>--}}
{{--    <form class="form" method="post" action="/record_to_school">--}}
{{--        {{ csrf_field() }}--}}
{{--        <div class="input-group">--}}
{{--            <input type="text" name="name" placeholder="{{ __("default.pages.modals.name") }}" class="input-regular" required>--}}
{{--        </div>--}}
{{--        <div class="input-group">--}}
{{--            <input type="tel" name="phone" placeholder="{{ __("default.pages.modals.phone") }}" onfocus="$(this).inputmask('+7 999 999 99 99')"--}}
{{--                   class="input-regular" required>--}}
{{--        </div>--}}
{{--        <div class="input-group">--}}
{{--            <input type="email" name="email" placeholder="{{ __("default.pages.modals.email") }}" class="input-regular" required>--}}
{{--        </div>--}}
{{--        @if(!empty($item->regions[0]))--}}
{{--            <div class="input-group">--}}
{{--                <input type="hidden" name="region" class="input-regular"--}}
{{--                       value="{!! $item->regions[0]->getAttribute('name_'.$lang) ?? $item->regions[0]->getAttribute('name_ru') !!}">--}}
{{--            </div>--}}
{{--        @endif--}}
{{--        <div class="text-center">--}}
{{--            <button type="submit" class="btn">{{ __("default.pages.modals.send_write") }}</button>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</div>--}}

<div id="goalkeeper" class="form-modal" style="display:none">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#russian-{{$textItems->firstWhere('element_id', 'goal_keeper__title_ru')->element_id}}">Русский</a></li>
        <li><a data-toggle="tab" href="#kazakh-{{$textItems->firstWhere('element_id', 'goal_keeper__title_kk')->element_id}}">Қазақша</a></li>
    </ul>

    <div class="tab-content">
        <div id="russian-{{$textItems->firstWhere('element_id', 'goal_keeper__title_ru')->element_id}}" class="tab-pane fade in active">
            <h4 id="goal_keeper__title_ru" contenteditable="false" class="title-primary text-center"
                data-url="{{route('text.update', $textItems->firstWhere('element_id', 'goal_keeper__title_ru')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'goal_keeper__title_ru')->content !!}
            </h4>
            <p id="goal_keeper__content_ru" contenteditable="false"
               data-url="{{route('text.update', $textItems->firstWhere('element_id', 'goal_keeper__content_ru')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'goal_keeper__content_ru')->content !!}
            </p>
        </div>
        <div id="kazakh-{{$textItems->firstWhere('element_id', 'goal_keeper__title_kk')->element_id}}" class="tab-pane fade">
            <h4 id="goal_keeper__title_kk" contenteditable="false" class="title-primary text-center"
                data-url="{{route('text.update', $textItems->firstWhere('element_id', 'goal_keeper__title_kk')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'goal_keeper__title_kk')->content !!}
            </h4>
            <p id="goal_keeper__content_kk" contenteditable="false"
               data-url="{{route('text.update', $textItems->firstWhere('element_id', 'goal_keeper__content_kk')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'goal_keeper__content_kk')->content !!}
            </p>
        </div>

    </div>
</div>

<div id="forward" class="form-modal" style="display:none">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#russian-{{$textItems->firstWhere('element_id', 'forwarder__title_ru')->element_id}}">Русский</a></li>
        <li><a data-toggle="tab" href="#kazakh-{{$textItems->firstWhere('element_id', 'forwarder__title_kk')->element_id}}">Қазақша</a></li>
    </ul>

    <div class="tab-content">
        <div id="russian-{{$textItems->firstWhere('element_id', 'forwarder__title_ru')->element_id}}" class="tab-pane fade in active">
            <h4 id="{{$textItems->firstWhere('element_id', 'forwarder__title_ru')->element_id}}" contenteditable="false" class="title-primary text-center"
                data-url="{{route('text.update', $textItems->firstWhere('element_id', 'forwarder__title_ru')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'forwarder__title_ru')->content !!}
            </h4>
            <p id="{{$textItems->firstWhere('element_id', 'forwarder__content_ru')->element_id}}" contenteditable="false"
               data-url="{{route('text.update', $textItems->firstWhere('element_id', 'forwarder__content_ru')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'forwarder__content_ru')->content !!}
            </p>
        </div>
        <div id="kazakh-{{$textItems->firstWhere('element_id', 'forwarder__title_kk')->element_id}}" class="tab-pane fade">
            <h4 id="{{$textItems->firstWhere('element_id', 'forwarder__title_kk')->element_id}}" contenteditable="false" class="title-primary text-center"
                data-url="{{route('text.update', $textItems->firstWhere('element_id', 'forwarder__title_kk')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'forwarder__title_kk')->content !!}
            </h4>
            <p id="{{$textItems->firstWhere('element_id', 'forwarder__content_kk')->element_id }}"  contenteditable="false"
               data-url="{{route('text.update', $textItems->firstWhere('element_id', 'forwarder__content_kk')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'forwarder__content_kk')->content !!}
            </p>
        </div>

    </div>
</div>

<div id="defender" class="form-modal" style="display:none">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#russian-{{$textItems->firstWhere('element_id', 'defender__title_ru')->element_id}}">Русский</a></li>
        <li><a data-toggle="tab" href="#kazakh-{{$textItems->firstWhere('element_id', 'defender__title_kk')->element_id}}">Қазақша</a></li>
    </ul>

    <div class="tab-content">
        <div id="russian-{{$textItems->firstWhere('element_id', 'defender__title_ru')->element_id}}" class="tab-pane fade in active">
            <h4 id="{{$textItems->firstWhere('element_id', 'defender__title_ru')->element_id}}" contenteditable="false" class="title-primary text-center"
                data-url="{{route('text.update', $textItems->firstWhere('element_id', 'defender__title_ru')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'defender__title_ru')->content !!}
            </h4>
            <p id="{{$textItems->firstWhere('element_id', 'defender__content_ru')->element_id}}" contenteditable="false"
               data-url="{{route('text.update', $textItems->firstWhere('element_id', 'defender__content_ru')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'defender__content_ru')->content !!}
            </p>
        </div>
        <div id="kazakh-{{$textItems->firstWhere('element_id', 'defender__title_kk')->element_id}}" class="tab-pane fade">
            <h4 id="{{$textItems->firstWhere('element_id', 'defender__title_kk')->element_id}}" contenteditable="false" class="title-primary text-center"
                data-url="{{route('text.update', $textItems->firstWhere('element_id', 'defender__title_kk')->id )}}"
            >
                {{ $textItems->firstWhere('element_id', 'defender__title_kk')->content }}
            </h4>
            <p id="{{$textItems->firstWhere('element_id', 'defender__content_kk')->element_id }}"  contenteditable="false"
               data-url="{{route('text.update', $textItems->firstWhere('element_id', 'defender__content_kk')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'defender__content_kk')->content !!}
            </p>
        </div>

    </div>
</div>

{{--<div id="forward" class="form-modal" style="display:none">--}}
{{--    <h4 class="title-primary text-center">{{ __("default.pages.about.forward_title") }}</h4>--}}
{{--    <p id="">{!! __("default.pages.about.forward_content") !!}</p>--}}
{{--</div>--}}



{{--<div id="defender" class="form-modal" style="display:none">--}}
{{--    <h4 class="title-primary text-center">{{ __("default.pages.about.defender_title") }}</h4>--}}
{{--    <p>{!! __("default.pages.about.defender_content") !!}</p>--}}
{{--</div>--}}



{{--<div id="equipment_bib" class="form-modal" style="display:none">--}}
{{--    <h4 class="title-primary text-center">{{ __("default.pages.equipment.bib") }}</h4>--}}
{{--    <p>{{ __("default.pages.equipment.bib_content") }}</p>--}}
{{--    {!! __("default.pages.equipment.bib_video") !!}--}}
{{--</div>--}}


<div id="equipment_bib" class="form-modal" style="display:none">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#russian-{{$textItems->firstWhere('element_id', 'equipment_bib__title_ru')->element_id}}">Русский</a></li>
        <li><a data-toggle="tab" href="#kazakh-{{$textItems->firstWhere('element_id', 'equipment_bib__title_kk')->element_id}}">Қазақша</a></li>
    </ul>

    <div class="tab-content">
        <div id="russian-{{$textItems->firstWhere('element_id', 'equipment_bib__title_ru')->element_id}}" class="tab-pane fade in active">
            <h4 id="{{$textItems->firstWhere('element_id', 'equipment_bib__title_ru')->element_id}}" contenteditable="false" class="title-primary text-center"
                data-url="{{route('text.update', $textItems->firstWhere('element_id', 'equipment_bib__title_ru')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'equipment_bib__title_ru')->content !!}
            </h4>
            <p id="{{$textItems->firstWhere('element_id', 'equipment_bib__content_ru')->element_id}}" contenteditable="false"
               data-url="{{route('text.update', $textItems->firstWhere('element_id', 'equipment_bib__content_ru')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'equipment_bib__content_ru')->content !!}
            </p>
        </div>
        <div id="kazakh-{{$textItems->firstWhere('element_id', 'equipment_bib__title_kk')->element_id}}" class="tab-pane fade">
            <h4 id="{{$textItems->firstWhere('element_id', 'equipment_bib__title_kk')->element_id}}" contenteditable="false" class="title-primary text-center"
                data-url="{{route('text.update', $textItems->firstWhere('element_id', 'equipment_bib__title_kk')->id )}}"
            >
                {{ $textItems->firstWhere('element_id', 'equipment_bib__title_kk')->content }}
            </h4>
            <p id="{{$textItems->firstWhere('element_id', 'equipment_bib__content_kk')->element_id }}"  contenteditable="false"
               data-url="{{route('text.update', $textItems->firstWhere('element_id', 'equipment_bib__content_kk')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'equipment_bib__content_kk')->content !!}
            </p>
        </div>

    </div>
</div>

{{--<div id="equipment_pads" class="form-modal" style="display:none">--}}
{{--    <h4 class="title-primary text-center">{{ __("default.pages.equipment.pads") }}</h4>--}}
{{--    <p>{{ __("default.pages.equipment.pads_content") }}</p>--}}
{{--    {!! __("default.pages.equipment.pads_video") !!}--}}
{{--</div>--}}
<div id="equipment_pads" class="form-modal" style="display:none">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#russian-{{$textItems->firstWhere('element_id', 'equipment_pads__title_ru')->element_id}}">Русский</a></li>
        <li><a data-toggle="tab" href="#kazakh-{{$textItems->firstWhere('element_id', 'equipment_pads__title_kk')->element_id}}">Қазақша</a></li>
    </ul>

    <div class="tab-content">
        <div id="russian-{{$textItems->firstWhere('element_id', 'equipment_pads__title_ru')->element_id}}" class="tab-pane fade in active">
            <h4 id="{{$textItems->firstWhere('element_id', 'equipment_pads__title_ru')->element_id}}" contenteditable="false" class="title-primary text-center"
                data-url="{{route('text.update', $textItems->firstWhere('element_id', 'equipment_pads__title_ru')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'equipment_pads__title_ru')->content !!}
            </h4>
            <p id="{{$textItems->firstWhere('element_id', 'equipment_pads__content_ru')->element_id}}" contenteditable="false"
               data-url="{{route('text.update', $textItems->firstWhere('element_id', 'equipment_pads__content_ru')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'equipment_pads__content_ru')->content !!}
            </p>
        </div>
        <div id="kazakh-{{$textItems->firstWhere('element_id', 'equipment_pads__title_kk')->element_id}}" class="tab-pane fade">
            <h4 id="{{$textItems->firstWhere('element_id', 'equipment_pads__title_kk')->element_id}}" contenteditable="false" class="title-primary text-center"
                data-url="{{route('text.update', $textItems->firstWhere('element_id', 'equipment_pads__title_kk')->id )}}"
            >
                {{ $textItems->firstWhere('element_id', 'equipment_pads__title_kk')->content }}
            </h4>
            <p id="{{$textItems->firstWhere('element_id', 'equipment_pads__content_kk')->element_id }}"  contenteditable="false"
               data-url="{{route('text.update', $textItems->firstWhere('element_id', 'equipment_pads__content_kk')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'equipment_pads__content_kk')->content !!}
            </p>
        </div>

    </div>
</div>


{{--<div id="equipment_shields" class="form-modal" style="display:none">--}}
{{--    <h4 class="title-primary text-center">{{ __("default.pages.equipment.shields") }}</h4>--}}
{{--    <p>{{ __("default.pages.equipment.shields_content") }}</p>--}}
{{--    {!! __("default.pages.equipment.shields_video") !!}--}}
{{--</div>--}}

<div id="equipment_shields" class="form-modal" style="display:none">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#russian-{{$textItems->firstWhere('element_id', 'equipment_shields__title_ru')->element_id}}">Русский</a></li>
        <li><a data-toggle="tab" href="#kazakh-{{$textItems->firstWhere('element_id', 'equipment_shields__title_kk')->element_id}}">Қазақша</a></li>
    </ul>

    <div class="tab-content">
        <div id="russian-{{$textItems->firstWhere('element_id', 'equipment_shields__title_ru')->element_id}}" class="tab-pane fade in active">
            <h4 id="{{$textItems->firstWhere('element_id', 'equipment_shields__title_ru')->element_id}}" contenteditable="false" class="title-primary text-center"
                data-url="{{route('text.update', $textItems->firstWhere('element_id', 'equipment_shields__title_ru')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'equipment_shields__title_ru')->content !!}
            </h4>
            <p id="{{$textItems->firstWhere('element_id', 'equipment_shields__content_ru')->element_id}}" contenteditable="false"
               data-url="{{route('text.update', $textItems->firstWhere('element_id', 'equipment_shields__content_ru')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'equipment_shields__content_ru')->content !!}
            </p>
        </div>
        <div id="kazakh-{{$textItems->firstWhere('element_id', 'equipment_shields__title_kk')->element_id}}" class="tab-pane fade">
            <h4 id="{{$textItems->firstWhere('element_id', 'equipment_shields__title_kk')->element_id}}" contenteditable="false" class="title-primary text-center"
                data-url="{{route('text.update', $textItems->firstWhere('element_id', 'equipment_shields__title_kk')->id )}}"
            >
                {{ $textItems->firstWhere('element_id', 'equipment_shields__title_kk')->content }}
            </h4>
            <p id="{{$textItems->firstWhere('element_id', 'equipment_shields__content_kk')->element_id }}"  contenteditable="false"
               data-url="{{route('text.update', $textItems->firstWhere('element_id', 'equipment_shields__content_kk')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'equipment_shields__content_kk')->content !!}
            </p>
        </div>

    </div>
</div>

{{--<div id="neck_protection" class="form-modal" style="display:none">--}}
{{--    <h4 class="title-primary text-center">{{ __("default.pages.equipment.neck_protection") }}</h4>--}}
{{--    <p>{{ __("default.pages.equipment.neck_protection_content") }}</p>--}}
{{--    {!! __("default.pages.equipment.neck_video") !!}--}}
{{--</div>--}}
<div id="neck_protection" class="form-modal" style="display:none">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#russian-{{$textItems->firstWhere('element_id', 'neck_protection__title_ru')->element_id}}">Русский</a></li>
        <li><a data-toggle="tab" href="#kazakh-{{$textItems->firstWhere('element_id', 'neck_protection__title_kk')->element_id}}">Қазақша</a></li>
    </ul>

    <div class="tab-content">
        <div id="russian-{{$textItems->firstWhere('element_id', 'neck_protection__title_ru')->element_id}}" class="tab-pane fade in active">
            <h4 id="{{$textItems->firstWhere('element_id', 'neck_protection__title_ru')->element_id}}" contenteditable="false" class="title-primary text-center"
                data-url="{{route('text.update', $textItems->firstWhere('element_id', 'neck_protection__title_ru')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'neck_protection__title_ru')->content !!}
            </h4>
            <p id="{{$textItems->firstWhere('element_id', 'neck_protection__content_ru')->element_id}}" contenteditable="false"
               data-url="{{route('text.update', $textItems->firstWhere('element_id', 'neck_protection__content_ru')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'neck_protection__content_ru')->content !!}
            </p>
        </div>
        <div id="kazakh-{{$textItems->firstWhere('element_id', 'neck_protection__title_kk')->element_id}}" class="tab-pane fade">
            <h4 id="{{$textItems->firstWhere('element_id', 'neck_protection__title_kk')->element_id}}" contenteditable="false" class="title-primary text-center"
                data-url="{{route('text.update', $textItems->firstWhere('element_id', 'neck_protection__title_kk')->id )}}"
            >
                {{ $textItems->firstWhere('element_id', 'neck_protection__title_kk')->content }}
            </h4>
            <p id="{{$textItems->firstWhere('element_id', 'neck_protection__content_kk')->element_id }}"  contenteditable="false"
               data-url="{{route('text.update', $textItems->firstWhere('element_id', 'neck_protection__content_kk')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'neck_protection__content_kk')->content !!}
            </p>
        </div>

    </div>
</div>

{{--<div id="equipment_jersey" class="form-modal" style="display:none">--}}
{{--    <h4 class="title-primary text-center">{{ __("default.pages.equipment.jersey") }}</h4>--}}
{{--    {!! __("default.pages.equipment.jersey_content") !!}--}}
{{--    {!! __("default.pages.equipment.jersey_video") !!}--}}
{{--</div>--}}
<div id="equipment_jersey" class="form-modal" style="display:none">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#russian-{{$textItems->firstWhere('element_id', 'equipment_jersey__title_ru')->element_id}}">Русский</a></li>
        <li><a data-toggle="tab" href="#kazakh-{{$textItems->firstWhere('element_id', 'equipment_jersey__title_kk')->element_id}}">Қазақша</a></li>
    </ul>

    <div class="tab-content">
        <div id="russian-{{$textItems->firstWhere('element_id', 'equipment_jersey__title_ru')->element_id}}" class="tab-pane fade in active">
            <h4 id="{{$textItems->firstWhere('element_id', 'equipment_jersey__title_ru')->element_id}}" contenteditable="false" class="title-primary text-center"
                data-url="{{route('text.update', $textItems->firstWhere('element_id', 'equipment_jersey__title_ru')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'equipment_jersey__title_ru')->content !!}
            </h4>
            <p id="{{$textItems->firstWhere('element_id', 'equipment_jersey__content_ru')->element_id}}" contenteditable="false"
               data-url="{{route('text.update', $textItems->firstWhere('element_id', 'equipment_jersey__content_ru')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'equipment_jersey__content_ru')->content !!}
            </p>
        </div>
        <div id="kazakh-{{$textItems->firstWhere('element_id', 'equipment_jersey__title_kk')->element_id}}" class="tab-pane fade">
            <h4 id="{{$textItems->firstWhere('element_id', 'equipment_jersey__title_kk')->element_id}}" contenteditable="false" class="title-primary text-center"
                data-url="{{route('text.update', $textItems->firstWhere('element_id', 'equipment_jersey__title_kk')->id )}}"
            >
                {{ $textItems->firstWhere('element_id', 'equipment_jersey__title_kk')->content }}
            </h4>
            <p id="{{$textItems->firstWhere('element_id', 'equipment_jersey__content_kk')->element_id }}"  contenteditable="false"
               data-url="{{route('text.update', $textItems->firstWhere('element_id', 'equipment_jersey__content_kk')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'equipment_jersey__content_kk')->content !!}
            </p>
        </div>

    </div>
</div>


{{--<div id="equipment_gaiters" class="form-modal" style="display:none">--}}
{{--    <h4 class="title-primary text-center">{{ __("default.pages.equipment.gaiters") }}</h4>--}}
{{--    <p>{{ __("default.pages.equipment.gaiters_content") }}</p>--}}
{{--    {!! __("default.pages.equipment.gaiters_video") !!}--}}
{{--</div>--}}
<div id="equipment_gaiters" class="form-modal" style="display:none">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#russian-{{$textItems->firstWhere('element_id', 'equipment_gaiters__title_ru')->element_id}}">Русский</a></li>
        <li><a data-toggle="tab" href="#kazakh-{{$textItems->firstWhere('element_id', 'equipment_gaiters__title_kk')->element_id}}">Қазақша</a></li>
    </ul>

    <div class="tab-content">
        <div id="russian-{{$textItems->firstWhere('element_id', 'equipment_gaiters__title_ru')->element_id}}" class="tab-pane fade in active">
            <h4 id="{{$textItems->firstWhere('element_id', 'equipment_gaiters__title_ru')->element_id}}" contenteditable="false" class="title-primary text-center"
                data-url="{{route('text.update', $textItems->firstWhere('element_id', 'equipment_gaiters__title_ru')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'equipment_gaiters__title_ru')->content !!}
            </h4>
            <p id="{{$textItems->firstWhere('element_id', 'equipment_gaiters__content_ru')->element_id}}" contenteditable="false"
               data-url="{{route('text.update', $textItems->firstWhere('element_id', 'equipment_gaiters__content_ru')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'equipment_gaiters__content_ru')->content !!}
            </p>
        </div>
        <div id="kazakh-{{$textItems->firstWhere('element_id', 'equipment_gaiters__title_kk')->element_id}}" class="tab-pane fade">
            <h4 id="{{$textItems->firstWhere('element_id', 'equipment_gaiters__title_kk')->element_id}}" contenteditable="false" class="title-primary text-center"
                data-url="{{route('text.update', $textItems->firstWhere('element_id', 'equipment_gaiters__title_kk')->id )}}"
            >
                {{ $textItems->firstWhere('element_id', 'equipment_gaiters__title_kk')->content }}
            </h4>
            <p id="{{$textItems->firstWhere('element_id', 'equipment_gaiters__content_kk')->element_id }}"  contenteditable="false"
               data-url="{{route('text.update', $textItems->firstWhere('element_id', 'equipment_gaiters__content_kk')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'equipment_gaiters__content_kk')->content !!}
            </p>
        </div>

    </div>
</div>

{{--<div id="equipment_helmet" class="form-modal" style="display:none">--}}
{{--    <h4 class="title-primary text-center">{{ __("default.pages.equipment.helmet") }}</h4>--}}
{{--    {!! __("default.pages.equipment.helmet_content") !!}--}}
{{--    {!! __("default.pages.equipment.helmet_video") !!}--}}

{{--</div>--}}
<div id="equipment_helmet" class="form-modal" style="display:none">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#russian-{{$textItems->firstWhere('element_id', 'equipment_helmet__title_ru')->element_id}}">Русский</a></li>
        <li><a data-toggle="tab" href="#kazakh-{{$textItems->firstWhere('element_id', 'equipment_helmet__title_kk')->element_id}}">Қазақша</a></li>
    </ul>

    <div class="tab-content">
        <div id="russian-{{$textItems->firstWhere('element_id', 'equipment_helmet__title_ru')->element_id}}" class="tab-pane fade in active">
            <h4 id="{{$textItems->firstWhere('element_id', 'equipment_helmet__title_ru')->element_id}}" contenteditable="false" class="title-primary text-center"
                data-url="{{route('text.update', $textItems->firstWhere('element_id', 'equipment_helmet__title_ru')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'equipment_helmet__title_ru')->content !!}
            </h4>
            <p id="{{$textItems->firstWhere('element_id', 'equipment_helmet__content_ru')->element_id}}" contenteditable="false"
               data-url="{{route('text.update', $textItems->firstWhere('element_id', 'equipment_helmet__content_ru')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'equipment_helmet__content_ru')->content !!}
            </p>
        </div>
        <div id="kazakh-{{$textItems->firstWhere('element_id', 'equipment_helmet__title_kk')->element_id}}" class="tab-pane fade">
            <h4 id="{{$textItems->firstWhere('element_id', 'equipment_helmet__title_kk')->element_id}}" contenteditable="false" class="title-primary text-center"
                data-url="{{route('text.update', $textItems->firstWhere('element_id', 'equipment_helmet__title_kk')->id )}}"
            >
                {{ $textItems->firstWhere('element_id', 'equipment_helmet__title_kk')->content }}
            </h4>
            <p id="{{$textItems->firstWhere('element_id', 'equipment_helmet__content_kk')->element_id }}"  contenteditable="false"
               data-url="{{route('text.update', $textItems->firstWhere('element_id', 'equipment_helmet__content_kk')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'equipment_helmet__content_kk')->content !!}
            </p>
        </div>

    </div>
</div>


{{--<div id="equipment_gloves" class="form-modal" style="display:none">--}}
{{--    <h4 class="title-primary text-center">{{ __("default.pages.equipment.gloves") }}</h4>--}}
{{--    {!! __("default.pages.equipment.gloves_content") !!}--}}
{{--    {!! __("default.pages.equipment.gloves_video") !!}--}}

{{--</div>--}}
<div id="equipment_gloves" class="form-modal" style="display:none">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#russian-{{$textItems->firstWhere('element_id', 'equipment_gloves__title_ru')->element_id}}">Русский</a></li>
        <li><a data-toggle="tab" href="#kazakh-{{$textItems->firstWhere('element_id', 'equipment_gloves__title_kk')->element_id}}">Қазақша</a></li>
    </ul>

    <div class="tab-content">
        <div id="russian-{{$textItems->firstWhere('element_id', 'equipment_gloves__title_ru')->element_id}}" class="tab-pane fade in active">
            <h4 id="{{$textItems->firstWhere('element_id', 'equipment_gloves__title_ru')->element_id}}" contenteditable="false" class="title-primary text-center"
                data-url="{{route('text.update', $textItems->firstWhere('element_id', 'equipment_gloves__title_ru')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'equipment_gloves__title_ru')->content !!}
            </h4>
            <p id="{{$textItems->firstWhere('element_id', 'equipment_gloves__content_ru')->element_id}}" contenteditable="false"
               data-url="{{route('text.update', $textItems->firstWhere('element_id', 'equipment_gloves__content_ru')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'equipment_gloves__content_ru')->content !!}
            </p>
        </div>
        <div id="kazakh-{{$textItems->firstWhere('element_id', 'equipment_gloves__title_kk')->element_id}}" class="tab-pane fade">
            <h4 id="{{$textItems->firstWhere('element_id', 'equipment_gloves__title_kk')->element_id}}" contenteditable="false" class="title-primary text-center"
                data-url="{{route('text.update', $textItems->firstWhere('element_id', 'equipment_gloves__title_kk')->id )}}"
            >
                {{ $textItems->firstWhere('element_id', 'equipment_gloves__title_kk')->content }}
            </h4>
            <p id="{{$textItems->firstWhere('element_id', 'equipment_gloves__content_kk')->element_id }}"  contenteditable="false"
               data-url="{{route('text.update', $textItems->firstWhere('element_id', 'equipment_gloves__content_kk')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'equipment_gloves__content_kk')->content !!}
            </p>
        </div>

    </div>
</div>


<div id="equipment_stick" class="form-modal" style="display:none">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#russian-{{$textItems->firstWhere('element_id', 'equipment_stick__title_ru')->element_id}}">Русский</a></li>
        <li><a data-toggle="tab" href="#kazakh-{{$textItems->firstWhere('element_id', 'equipment_stick__title_kk')->element_id}}">Қазақша</a></li>
    </ul>

    <div class="tab-content">
        <div id="russian-{{$textItems->firstWhere('element_id', 'equipment_stick__title_ru')->element_id}}" class="tab-pane fade in active">
            <h4 id="{{$textItems->firstWhere('element_id', 'equipment_stick__title_ru')->element_id}}" contenteditable="false" class="title-primary text-center"
                data-url="{{route('text.update', $textItems->firstWhere('element_id', 'equipment_stick__title_ru')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'equipment_stick__title_ru')->content !!}
            </h4>
            <p id="{{$textItems->firstWhere('element_id', 'equipment_stick__content_ru')->element_id}}" contenteditable="false"
               data-url="{{route('text.update', $textItems->firstWhere('element_id', 'equipment_stick__content_ru')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'equipment_stick__content_ru')->content !!}
            </p>
        </div>
        <div id="kazakh-{{$textItems->firstWhere('element_id', 'equipment_stick__title_kk')->element_id}}" class="tab-pane fade">
            <h4 id="{{$textItems->firstWhere('element_id', 'equipment_stick__title_kk')->element_id}}" contenteditable="false" class="title-primary text-center"
                data-url="{{route('text.update', $textItems->firstWhere('element_id', 'equipment_stick__title_kk')->id )}}"
            >
                {{ $textItems->firstWhere('element_id', 'equipment_stick__title_kk')->content }}
            </h4>
            <p id="{{$textItems->firstWhere('element_id', 'equipment_stick__content_kk')->element_id }}"  contenteditable="false"
               data-url="{{route('text.update', $textItems->firstWhere('element_id', 'equipment_stick__content_kk')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'equipment_stick__content_kk')->content !!}
            </p>
        </div>

    </div>
</div>


<div id="equipment_shorts" class="form-modal" style="display:none">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#russian-{{$textItems->firstWhere('element_id', 'equipment_shorts__title_ru')->element_id}}">Русский</a></li>
        <li><a data-toggle="tab" href="#kazakh-{{$textItems->firstWhere('element_id', 'equipment_shorts__title_kk')->element_id}}">Қазақша</a></li>
    </ul>

    <div class="tab-content">
        <div id="russian-{{$textItems->firstWhere('element_id', 'equipment_shorts__title_ru')->element_id}}" class="tab-pane fade in active">
            <h4 id="{{$textItems->firstWhere('element_id', 'equipment_shorts__title_ru')->element_id}}" contenteditable="false" class="title-primary text-center"
                data-url="{{route('text.update', $textItems->firstWhere('element_id', 'equipment_shorts__title_ru')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'equipment_shorts__title_ru')->content !!}
            </h4>
            <p id="{{$textItems->firstWhere('element_id', 'equipment_shorts__content_ru')->element_id}}" contenteditable="false"
               data-url="{{route('text.update', $textItems->firstWhere('element_id', 'equipment_shorts__content_ru')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'equipment_shorts__content_ru')->content !!}
            </p>
        </div>
        <div id="kazakh-{{$textItems->firstWhere('element_id', 'equipment_shorts__title_kk')->element_id}}" class="tab-pane fade">
            <h4 id="{{$textItems->firstWhere('element_id', 'equipment_shorts__title_kk')->element_id}}" contenteditable="false" class="title-primary text-center"
                data-url="{{route('text.update', $textItems->firstWhere('element_id', 'equipment_shorts__title_kk')->id )}}"
            >
                {{ $textItems->firstWhere('element_id', 'equipment_shorts__title_kk')->content }}
            </h4>
            <p id="{{$textItems->firstWhere('element_id', 'equipment_shorts__content_kk')->element_id }}"  contenteditable="false"
               data-url="{{route('text.update', $textItems->firstWhere('element_id', 'equipment_shorts__content_kk')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'equipment_shorts__content_kk')->content !!}
            </p>
        </div>

    </div>
</div>

<div id="equipment_skates" class="form-modal" style="display:none">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#russian-{{$textItems->firstWhere('element_id', 'equipment_skates__title_ru')->element_id}}">Русский</a></li>
        <li><a data-toggle="tab" href="#kazakh-{{$textItems->firstWhere('element_id', 'equipment_skates__title_kk')->element_id}}">Қазақша</a></li>
    </ul>

    <div class="tab-content">
        <div id="russian-{{$textItems->firstWhere('element_id', 'equipment_skates__title_ru')->element_id}}" class="tab-pane fade in active">
            <h4 id="{{$textItems->firstWhere('element_id', 'equipment_skates__title_ru')->element_id}}" contenteditable="false" class="title-primary text-center"
                data-url="{{route('text.update', $textItems->firstWhere('element_id', 'equipment_skates__title_ru')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'equipment_skates__title_ru')->content !!}
            </h4>
            <p id="{{$textItems->firstWhere('element_id', 'equipment_skates__content_ru')->element_id}}" contenteditable="false"
               data-url="{{route('text.update', $textItems->firstWhere('element_id', 'equipment_skates__content_ru')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'equipment_skates__content_ru')->content !!}
            </p>
        </div>
        <div id="kazakh-{{$textItems->firstWhere('element_id', 'equipment_skates__title_kk')->element_id}}" class="tab-pane fade">
            <h4 id="{{$textItems->firstWhere('element_id', 'equipment_skates__title_kk')->element_id}}" contenteditable="false" class="title-primary text-center"
                data-url="{{route('text.update', $textItems->firstWhere('element_id', 'equipment_skates__title_kk')->id )}}"
            >
                {{ $textItems->firstWhere('element_id', 'equipment_skates__title_kk')->content }}
            </h4>
            <p id="{{$textItems->firstWhere('element_id', 'equipment_skates__content_kk')->element_id }}"  contenteditable="false"
               data-url="{{route('text.update', $textItems->firstWhere('element_id', 'equipment_skates__content_kk')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'equipment_skates__content_kk')->content !!}
            </p>
        </div>

    </div>
</div>

<div id="hockey_goal" class="form-modal" style="display:none">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#russian-{{$textItems->firstWhere('element_id', 'hockey_goal__title_ru')->element_id}}">Русский</a></li>
        <li><a data-toggle="tab" href="#kazakh-{{$textItems->firstWhere('element_id', 'hockey_goal__title_kk')->element_id}}">Қазақша</a></li>
    </ul>

    <div class="tab-content">
        <div id="russian-{{$textItems->firstWhere('element_id', 'hockey_goal__title_ru')->element_id}}" class="tab-pane fade in active">
            <h4 id="{{$textItems->firstWhere('element_id', 'hockey_goal__title_ru')->element_id}}" contenteditable="false" class="title-primary text-center"
                data-url="{{route('text.update', $textItems->firstWhere('element_id', 'hockey_goal__title_ru')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'hockey_goal__title_ru')->content !!}
            </h4>
            <p id="{{$textItems->firstWhere('element_id', 'hockey_goal__content_ru')->element_id}}" contenteditable="false"
               data-url="{{route('text.update', $textItems->firstWhere('element_id', 'hockey_goal__content_ru')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'hockey_goal__content_ru')->content !!}
            </p>
        </div>
        <div id="kazakh-{{$textItems->firstWhere('element_id', 'hockey_goal__title_kk')->element_id}}" class="tab-pane fade">
            <h4 id="{{$textItems->firstWhere('element_id', 'hockey_goal__title_kk')->element_id}}" contenteditable="false" class="title-primary text-center"
                data-url="{{route('text.update', $textItems->firstWhere('element_id', 'hockey_goal__title_kk')->id )}}"
            >
                {{ $textItems->firstWhere('element_id', 'hockey_goal__title_kk')->content }}
            </h4>
            <p id="{{$textItems->firstWhere('element_id', 'hockey_goal__content_kk')->element_id }}"  contenteditable="false"
               data-url="{{route('text.update', $textItems->firstWhere('element_id', 'hockey_goal__content_kk')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'hockey_goal__content_kk')->content !!}
            </p>
        </div>

    </div>
</div>

<div id="referee_field" class="form-modal" style="display:none">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#russian-{{$textItems->firstWhere('element_id', 'referee_field__title_ru')->element_id}}">Русский</a></li>
        <li><a data-toggle="tab" href="#kazakh-{{$textItems->firstWhere('element_id', 'referee_field__title_kk')->element_id}}">Қазақша</a></li>
    </ul>

    <div class="tab-content">
        <div id="russian-{{$textItems->firstWhere('element_id', 'referee_field__title_ru')->element_id}}" class="tab-pane fade in active">
            <h4 id="{{$textItems->firstWhere('element_id', 'referee_field__title_ru')->element_id}}" contenteditable="false" class="title-primary text-center"
                data-url="{{route('text.update', $textItems->firstWhere('element_id', 'referee_field__title_ru')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'referee_field__title_ru')->content !!}
            </h4>
            <p id="{{$textItems->firstWhere('element_id', 'referee_field__content_ru')->element_id}}" contenteditable="false"
               data-url="{{route('text.update', $textItems->firstWhere('element_id', 'referee_field__content_ru')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'referee_field__content_ru')->content !!}
            </p>
        </div>
        <div id="kazakh-{{$textItems->firstWhere('element_id', 'referee_field__title_kk')->element_id}}" class="tab-pane fade">
            <h4 id="{{$textItems->firstWhere('element_id', 'referee_field__title_kk')->element_id}}" contenteditable="false" class="title-primary text-center"
                data-url="{{route('text.update', $textItems->firstWhere('element_id', 'referee_field__title_kk')->id )}}"
            >
                {{ $textItems->firstWhere('element_id', 'referee_field__title_kk')->content }}
            </h4>
            <p id="{{$textItems->firstWhere('element_id', 'referee_field__content_kk')->element_id }}"  contenteditable="false"
               data-url="{{route('text.update', $textItems->firstWhere('element_id', 'referee_field__content_kk')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'referee_field__content_kk')->content !!}
            </p>
        </div>

    </div>
</div>

<div id="washer_field" class="form-modal" style="display:none">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#russian-{{$textItems->firstWhere('element_id', 'washer_field__title_ru')->element_id}}">Русский</a></li>
        <li><a data-toggle="tab" href="#kazakh-{{$textItems->firstWhere('element_id', 'washer_field__title_kk')->element_id}}">Қазақша</a></li>
    </ul>

    <div class="tab-content">
        <div id="russian-{{$textItems->firstWhere('element_id', 'washer_field__title_ru')->element_id}}" class="tab-pane fade in active">
            <h4 id="{{$textItems->firstWhere('element_id', 'washer_field__title_ru')->element_id}}" contenteditable="false" class="title-primary text-center"
                data-url="{{route('text.update', $textItems->firstWhere('element_id', 'washer_field__title_ru')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'washer_field__title_ru')->content !!}
            </h4>
            <p id="{{$textItems->firstWhere('element_id', 'washer_field__content_ru')->element_id}}" contenteditable="false"
               data-url="{{route('text.update', $textItems->firstWhere('element_id', 'washer_field__content_ru')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'washer_field__content_ru')->content !!}
            </p>
        </div>
        <div id="kazakh-{{$textItems->firstWhere('element_id', 'washer_field__title_kk')->element_id}}" class="tab-pane fade">
            <h4 id="{{$textItems->firstWhere('element_id', 'washer_field__title_kk')->element_id}}" contenteditable="false" class="title-primary text-center"
                data-url="{{route('text.update', $textItems->firstWhere('element_id', 'washer_field__title_kk')->id )}}"
            >
                {{ $textItems->firstWhere('element_id', 'washer_field__title_kk')->content }}
            </h4>
            <p id="{{$textItems->firstWhere('element_id', 'washer_field__content_kk')->element_id }}"  contenteditable="false"
               data-url="{{route('text.update', $textItems->firstWhere('element_id', 'washer_field__content_kk')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'washer_field__content_kk')->content !!}
            </p>
        </div>

    </div>
</div>


<div id="scoreboard" class="form-modal" style="display:none">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#russian-{{$textItems->firstWhere('element_id', 'scoreboard__title_ru')->element_id}}">Русский</a></li>
        <li><a data-toggle="tab" href="#kazakh-{{$textItems->firstWhere('element_id', 'scoreboard__title_kk')->element_id}}">Қазақша</a></li>
    </ul>

    <div class="tab-content">
        <div id="russian-{{$textItems->firstWhere('element_id', 'scoreboard__title_ru')->element_id}}" class="tab-pane fade in active">
            <h4 id="{{$textItems->firstWhere('element_id', 'scoreboard__title_ru')->element_id}}" contenteditable="false" class="title-primary text-center"
                data-url="{{route('text.update', $textItems->firstWhere('element_id', 'scoreboard__title_ru')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'scoreboard__title_ru')->content !!}
            </h4>
            <p id="{{$textItems->firstWhere('element_id', 'scoreboard__content_ru')->element_id}}" contenteditable="false"
               data-url="{{route('text.update', $textItems->firstWhere('element_id', 'scoreboard__content_ru')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'scoreboard__content_ru')->content !!}
            </p>
        </div>
        <div id="kazakh-{{$textItems->firstWhere('element_id', 'scoreboard__title_kk')->element_id}}" class="tab-pane fade">
            <h4 id="{{$textItems->firstWhere('element_id', 'scoreboard__title_kk')->element_id}}" contenteditable="false" class="title-primary text-center"
                data-url="{{route('text.update', $textItems->firstWhere('element_id', 'scoreboard__title_kk')->id )}}"
            >
                {{ $textItems->firstWhere('element_id', 'scoreboard__title_kk')->content }}
            </h4>
            <p id="{{$textItems->firstWhere('element_id', 'scoreboard__content_kk')->element_id }}"  contenteditable="false"
               data-url="{{route('text.update', $textItems->firstWhere('element_id', 'scoreboard__content_kk')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'scoreboard__content_kk')->content !!}
            </p>
        </div>

    </div>
</div>

<div id="ice_machine" class="form-modal" style="display:none">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#russian-{{$textItems->firstWhere('element_id', 'ice_machine__title_ru')->element_id}}">Русский</a></li>
        <li><a data-toggle="tab" href="#kazakh-{{$textItems->firstWhere('element_id', 'ice_machine__title_kk')->element_id}}">Қазақша</a></li>
    </ul>

    <div class="tab-content">
        <div id="russian-{{$textItems->firstWhere('element_id', 'ice_machine__title_ru')->element_id}}" class="tab-pane fade in active">
            <h4 id="{{$textItems->firstWhere('element_id', 'ice_machine__title_ru')->element_id}}" contenteditable="false" class="title-primary text-center"
                data-url="{{route('text.update', $textItems->firstWhere('element_id', 'ice_machine__title_ru')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'ice_machine__title_ru')->content !!}
            </h4>
            <p id="{{$textItems->firstWhere('element_id', 'ice_machine__content_ru')->element_id}}" contenteditable="false"
               data-url="{{route('text.update', $textItems->firstWhere('element_id', 'ice_machine__content_ru')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'ice_machine__content_ru')->content !!}
            </p>
        </div>
        <div id="kazakh-{{$textItems->firstWhere('element_id', 'ice_machine__title_kk')->element_id}}" class="tab-pane fade">
            <h4 id="{{$textItems->firstWhere('element_id', 'ice_machine__title_kk')->element_id}}" contenteditable="false" class="title-primary text-center"
                data-url="{{route('text.update', $textItems->firstWhere('element_id', 'ice_machine__title_kk')->id )}}"
            >
                {{ $textItems->firstWhere('element_id', 'ice_machine__title_kk')->content }}
            </h4>
            <p id="{{$textItems->firstWhere('element_id', 'ice_machine__content_kk')->element_id }}"  contenteditable="false"
               data-url="{{route('text.update', $textItems->firstWhere('element_id', 'ice_machine__content_kk')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'ice_machine__content_kk')->content !!}
            </p>
        </div>

    </div>
</div>

<div id="tribune" class="form-modal" style="display:none">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#russian-{{$textItems->firstWhere('element_id', 'tribune__title_ru')->element_id}}">Русский</a></li>
        <li><a data-toggle="tab" href="#kazakh-{{$textItems->firstWhere('element_id', 'tribune__title_kk')->element_id}}">Қазақша</a></li>
    </ul>

    <div class="tab-content">
        <div id="russian-{{$textItems->firstWhere('element_id', 'tribune__title_ru')->element_id}}" class="tab-pane fade in active">
            <h4 id="{{$textItems->firstWhere('element_id', 'tribune__title_ru')->element_id}}" contenteditable="false" class="title-primary text-center"
                data-url="{{route('text.update', $textItems->firstWhere('element_id', 'tribune__title_ru')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'tribune__title_ru')->content !!}
            </h4>
            <p id="{{$textItems->firstWhere('element_id', 'tribune__content_ru')->element_id}}" contenteditable="false"
               data-url="{{route('text.update', $textItems->firstWhere('element_id', 'tribune__content_ru')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'tribune__content_ru')->content !!}
            </p>
        </div>
        <div id="kazakh-{{$textItems->firstWhere('element_id', 'tribune__title_kk')->element_id}}" class="tab-pane fade">
            <h4 id="{{$textItems->firstWhere('element_id', 'tribune__title_kk')->element_id}}" contenteditable="false" class="title-primary text-center"
                data-url="{{route('text.update', $textItems->firstWhere('element_id', 'tribune__title_kk')->id )}}"
            >
                {{ $textItems->firstWhere('element_id', 'tribune__title_kk')->content }}
            </h4>
            <p id="{{$textItems->firstWhere('element_id', 'tribune__content_kk')->element_id }}"  contenteditable="false"
               data-url="{{route('text.update', $textItems->firstWhere('element_id', 'tribune__content_kk')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'tribune__content_kk')->content !!}
            </p>
        </div>

    </div>
</div>

<div id="bench" class="form-modal" style="display:none">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#russian-{{$textItems->firstWhere('element_id', 'bench__title_ru')->element_id}}">Русский</a></li>
        <li><a data-toggle="tab" href="#kazakh-{{$textItems->firstWhere('element_id', 'bench__title_kk')->element_id}}">Қазақша</a></li>
    </ul>

    <div class="tab-content">
        <div id="russian-{{$textItems->firstWhere('element_id', 'bench__title_ru')->element_id}}" class="tab-pane fade in active">
            <h4 id="{{$textItems->firstWhere('element_id', 'bench__title_ru')->element_id}}" contenteditable="false" class="title-primary text-center"
                data-url="{{route('text.update', $textItems->firstWhere('element_id', 'bench__title_ru')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'bench__title_ru')->content !!}
            </h4>
            <p id="{{$textItems->firstWhere('element_id', 'bench__content_ru')->element_id}}" contenteditable="false"
               data-url="{{route('text.update', $textItems->firstWhere('element_id', 'bench__content_ru')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'bench__content_ru')->content !!}
            </p>
        </div>
        <div id="kazakh-{{$textItems->firstWhere('element_id', 'bench__title_kk')->element_id}}" class="tab-pane fade">
            <h4 id="{{$textItems->firstWhere('element_id', 'bench__title_kk')->element_id}}" contenteditable="false" class="title-primary text-center"
                data-url="{{route('text.update', $textItems->firstWhere('element_id', 'bench__title_kk')->id )}}"
            >
                {{ $textItems->firstWhere('element_id', 'bench__title_kk')->content }}
            </h4>
            <p id="{{$textItems->firstWhere('element_id', 'bench__content_kk')->element_id }}"  contenteditable="false"
               data-url="{{route('text.update', $textItems->firstWhere('element_id', 'bench__content_kk')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'bench__content_kk')->content !!}
            </p>
        </div>

    </div>
</div>

<div id="penalty_box" class="form-modal" style="display:none">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#russian-{{$textItems->firstWhere('element_id', 'penalty_box__title_ru')->element_id}}">Русский</a></li>
        <li><a data-toggle="tab" href="#kazakh-{{$textItems->firstWhere('element_id', 'penalty_box__title_kk')->element_id}}">Қазақша</a></li>
    </ul>

    <div class="tab-content">
        <div id="russian-{{$textItems->firstWhere('element_id', 'penalty_box__title_ru')->element_id}}" class="tab-pane fade in active">
            <h4 id="{{$textItems->firstWhere('element_id', 'penalty_box__title_ru')->element_id}}" contenteditable="false" class="title-primary text-center"
                data-url="{{route('text.update', $textItems->firstWhere('element_id', 'penalty_box__title_ru')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'penalty_box__title_ru')->content !!}
            </h4>
            <p id="{{$textItems->firstWhere('element_id', 'penalty_box__content_ru')->element_id}}" contenteditable="false"
               data-url="{{route('text.update', $textItems->firstWhere('element_id', 'penalty_box__content_ru')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'penalty_box__content_ru')->content !!}
            </p>
        </div>
        <div id="kazakh-{{$textItems->firstWhere('element_id', 'penalty_box__title_kk')->element_id}}" class="tab-pane fade">
            <h4 id="{{$textItems->firstWhere('element_id', 'penalty_box__title_kk')->element_id}}" contenteditable="false" class="title-primary text-center"
                data-url="{{route('text.update', $textItems->firstWhere('element_id', 'penalty_box__title_kk')->id )}}"
            >
                {{ $textItems->firstWhere('element_id', 'penalty_box__title_kk')->content }}
            </h4>
            <p id="{{$textItems->firstWhere('element_id', 'penalty_box__content_kk')->element_id }}"  contenteditable="false"
               data-url="{{route('text.update', $textItems->firstWhere('element_id', 'penalty_box__content_kk')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'penalty_box__content_kk')->content !!}
            </p>
        </div>

    </div>
</div>

<div id="zone_a" class="form-modal" style="display:none">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#russian-{{$textItems->firstWhere('element_id', 'zone_a__title_ru')->element_id}}">Русский</a></li>
        <li><a data-toggle="tab" href="#kazakh-{{$textItems->firstWhere('element_id', 'zone_a__title_kk')->element_id}}">Қазақша</a></li>
    </ul>

    <div class="tab-content">
        <div id="russian-{{$textItems->firstWhere('element_id', 'zone_a__title_ru')->element_id}}" class="tab-pane fade in active">
            <h4 id="{{$textItems->firstWhere('element_id', 'zone_a__title_ru')->element_id}}" contenteditable="false" class="title-primary text-center"
                data-url="{{route('text.update', $textItems->firstWhere('element_id', 'zone_a__title_ru')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'zone_a__title_ru')->content !!}
            </h4>
            <p id="{{$textItems->firstWhere('element_id', 'zone_a__content_ru')->element_id}}" contenteditable="false"
               data-url="{{route('text.update', $textItems->firstWhere('element_id', 'zone_a__content_ru')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'zone_a__content_ru')->content !!}
            </p>
        </div>
        <div id="kazakh-{{$textItems->firstWhere('element_id', 'zone_a__title_kk')->element_id}}" class="tab-pane fade">
            <h4 id="{{$textItems->firstWhere('element_id', 'zone_a__title_kk')->element_id}}" contenteditable="false" class="title-primary text-center"
                data-url="{{route('text.update', $textItems->firstWhere('element_id', 'zone_a__title_kk')->id )}}"
            >
                {{ $textItems->firstWhere('element_id', 'zone_a__title_kk')->content }}
            </h4>
            <p id="{{$textItems->firstWhere('element_id', 'zone_a__content_kk')->element_id }}"  contenteditable="false"
               data-url="{{route('text.update', $textItems->firstWhere('element_id', 'zone_a__content_kk')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'zone_a__content_kk')->content !!}
            </p>
        </div>

    </div>
</div>

<div id="zone_c" class="form-modal" style="display:none">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#russian-{{$textItems->firstWhere('element_id', 'zone_c__title_ru')->element_id}}">Русский</a></li>
        <li><a data-toggle="tab" href="#kazakh-{{$textItems->firstWhere('element_id', 'zone_c__title_kk')->element_id}}">Қазақша</a></li>
    </ul>

    <div class="tab-content">
        <div id="russian-{{$textItems->firstWhere('element_id', 'zone_c__title_ru')->element_id}}" class="tab-pane fade in active">
            <h4 id="{{$textItems->firstWhere('element_id', 'zone_c__title_ru')->element_id}}" contenteditable="false" class="title-primary text-center"
                data-url="{{route('text.update', $textItems->firstWhere('element_id', 'zone_c__title_ru')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'zone_c__title_ru')->content !!}
            </h4>
            <p id="{{$textItems->firstWhere('element_id', 'zone_c__content_ru')->element_id}}" contenteditable="false"
               data-url="{{route('text.update', $textItems->firstWhere('element_id', 'zone_c__content_ru')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'zone_c__content_ru')->content !!}
            </p>
        </div>
        <div id="kazakh-{{$textItems->firstWhere('element_id', 'zone_c__title_kk')->element_id}}" class="tab-pane fade">
            <h4 id="{{$textItems->firstWhere('element_id', 'zone_c__title_kk')->element_id}}" contenteditable="false" class="title-primary text-center"
                data-url="{{route('text.update', $textItems->firstWhere('element_id', 'zone_c__title_kk')->id )}}"
            >
                {{ $textItems->firstWhere('element_id', 'zone_c__title_kk')->content }}
            </h4>
            <p id="{{$textItems->firstWhere('element_id', 'zone_c__content_kk')->element_id }}"  contenteditable="false"
               data-url="{{route('text.update', $textItems->firstWhere('element_id', 'zone_c__content_kk')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'zone_c__content_kk')->content !!}
            </p>
        </div>

    </div>
</div>

<div id="zone_b" class="form-modal" style="display:none">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#russian-{{$textItems->firstWhere('element_id', 'zone_b__title_ru')->element_id}}">Русский</a></li>
        <li><a data-toggle="tab" href="#kazakh-{{$textItems->firstWhere('element_id', 'zone_b__title_kk')->element_id}}">Қазақша</a></li>
    </ul>

    <div class="tab-content">
        <div id="russian-{{$textItems->firstWhere('element_id', 'zone_b__title_ru')->element_id}}" class="tab-pane fade in active">
            <h4 id="{{$textItems->firstWhere('element_id', 'zone_b__title_ru')->element_id}}" contenteditable="false" class="title-primary text-center"
                data-url="{{route('text.update', $textItems->firstWhere('element_id', 'zone_b__title_ru')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'zone_b__title_ru')->content !!}
            </h4>
            <p id="{{$textItems->firstWhere('element_id', 'zone_b__content_ru')->element_id}}" contenteditable="false"
               data-url="{{route('text.update', $textItems->firstWhere('element_id', 'zone_b__content_ru')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'zone_b__content_ru')->content !!}
            </p>
        </div>
        <div id="kazakh-{{$textItems->firstWhere('element_id', 'zone_b__title_kk')->element_id}}" class="tab-pane fade">
            <h4 id="{{$textItems->firstWhere('element_id', 'zone_b__title_kk')->element_id}}" contenteditable="false" class="title-primary text-center"
                data-url="{{route('text.update', $textItems->firstWhere('element_id', 'zone_b__title_kk')->id )}}"
            >
                {{ $textItems->firstWhere('element_id', 'zone_b__title_kk')->content }}
            </h4>
            <p id="{{$textItems->firstWhere('element_id', 'zone_b__content_kk')->element_id }}"  contenteditable="false"
               data-url="{{route('text.update', $textItems->firstWhere('element_id', 'zone_b__content_kk')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'zone_b__content_kk')->content !!}
            </p>
        </div>

    </div>
</div>


<div id="hockey_block_desc_4" class="form-modal" style="display:none">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#russian-{{$textItems->firstWhere('element_id', 'hockey_block_desc_4_ru')->element_id}}">Русский</a></li>
        <li><a data-toggle="tab" href="#kazakh-{{$textItems->firstWhere('element_id', 'hockey_block_desc_4_kk')->element_id}}">Қазақша</a></li>
    </ul>

    <div class="tab-content">
        <div id="russian-{{$textItems->firstWhere('element_id', 'hockey_block_desc_4_ru')->element_id}}" class="tab-pane fade in active">
            <p id="{{$textItems->firstWhere('element_id', 'hockey_block_desc_4_ru')->element_id}}" contenteditable="false"
               data-url="{{route('text.update', $textItems->firstWhere('element_id', 'hockey_block_desc_4_ru')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'hockey_block_desc_4_ru')->content !!}
            </p>
        </div>
        <div id="kazakh-{{$textItems->firstWhere('element_id', 'hockey_block_desc_4_kk')->element_id}}" class="tab-pane fade">
            <p id="{{$textItems->firstWhere('element_id', 'hockey_block_desc_4_kk')->element_id }}"  contenteditable="false"
               data-url="{{route('text.update', $textItems->firstWhere('element_id', 'hockey_block_desc_4_kk')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'hockey_block_desc_4_kk')->content !!}
            </p>
        </div>

    </div>
</div>


<div id="hockey_infrastructure_title" class="form-modal" style="display:none">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#russian-{{$textItems->firstWhere('element_id', 'hockey_infrastructure_title_ru')->element_id}}">Русский</a></li>
        <li><a data-toggle="tab" href="#kazakh-{{$textItems->firstWhere('element_id', 'hockey_infrastructure_title_kk')->element_id}}">Қазақша</a></li>
    </ul>

    <div class="tab-content">
        <div id="russian-{{$textItems->firstWhere('element_id', 'hockey_infrastructure_title_ru')->element_id}}" class="tab-pane fade in active">
            <p id="{{$textItems->firstWhere('element_id', 'hockey_infrastructure_title_ru')->element_id}}" contenteditable="false"
               data-url="{{route('text.update', $textItems->firstWhere('element_id', 'hockey_infrastructure_title_ru')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'hockey_infrastructure_title_ru')->content !!}
            </p>
        </div>
        <div id="kazakh-{{$textItems->firstWhere('element_id', 'hockey_infrastructure_title_kk')->element_id}}" class="tab-pane fade">
            <p id="{{$textItems->firstWhere('element_id', 'hockey_infrastructure_title_kk')->element_id }}"  contenteditable="false"
               data-url="{{route('text.update', $textItems->firstWhere('element_id', 'hockey_infrastructure_title_kk')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'hockey_infrastructure_title_kk')->content !!}
            </p>
        </div>

    </div>
</div>



<div id="equipment_sink" class="form-modal" style="display:none">
    <h4 class="title-primary text-center">{{ __("default.pages.equipment.sink") }}</h4>
    <p>{{ __("default.pages.equipment.sink_content") }}</p>
</div>



<div id="equipment_kneecap" class="form-modal" style="display:none">
    <h4 class="title-primary text-center">{{ __("default.pages.equipment.kneecap") }}</h4>
    {{__("default.pages.equipment.kneecap_video")}}

</div>


<div id="hockey_field" class="form-modal" style="display:none">
    <h4 class="title-primary text-center">{{ __("default.pages.main.hockey_field_title") }}</h4>
    {!! __("default.pages.main.hockey_field_content") !!}
</div>


<div id="equipment_player" class="form-modal" style="display:none">
    {{--<h4 class="title-primary text-center">{{ __("default.pages.equipment.player") }}</h4>--}}
    {!! __("default.pages.equipment.player_content") !!}
</div>


<div id="messageSuccess" class="form-modal" style="display:none">
    <h3 class="title-primary text-center">{{ __("default.pages.modals.success_message") }}</h3>

    {{--<div class="text-center">--}}
        {{--<a href="/" class="btn">На главную</a>--}}
    {{--</div>--}}
</div>
@if(session()->has('success'))
    <script>
        $.fancybox.open({
            src: "#messageSuccess",
            touch: false
        })
    </script>

@endif
