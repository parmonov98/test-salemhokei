<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Region;
use App\Models\Section;
use App\Models\Log;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SectionController extends Controller
{

    public function index(Request $request)
    {

        $term = $request->get("term");
        $query = Section::orderBy("id", "desc")->with('authors');
        if ($term) {
            $query = $query->where("name_ru", "like", "%" . $term . "%");
        }

        $items = $query->paginate();

        return view("admin.sections.index", [
            "items" => $items,
            "term" => $term,
        ]);
    }

    public function add()
    {
        $item = new Section;
        $responsible = User::all();
        $regions = Region::all();
        return view('admin.sections.view', [
            'item' => $item,
            'responsible' => $responsible,
            'regions' => $regions
        ]);
    }

    public function create()
    {
        $item = new Section;
        $sections = Section::orderBy("name_ru", "asc")->get();
        return view("admin.sections.view", [
            "item" => $item,
            "sections" => $sections
        ]);
    }

    public function save(Request $request)
    {
        $this->validate($request, [
            "name_ru" => "required|min:3|max:255",
        ]);

        $item = new Section;
        $item->name_ru = $request->name_ru;
        $item->name_kk = $request->name_kk;
        $item->name_en = $request->name_en;
        $item->annotation_ru = $request->annotation_ru;
        $item->annotation_kk = $request->annotation_kk;
        $item->annotation_en = $request->annotation_en;
        $item->description_ru = $request->description_ru;
        $item->description_kk = $request->description_kk;
        $item->description_en = $request->description_en;
        $item->meta_title_ru = $request->meta_title_ru;
        $item->meta_title_en = $request->meta_title_en;
        $item->meta_title_kk = $request->meta_title_kk;
        $item->meta_description_ru = $request->meta_description_ru;
        $item->meta_description_en = $request->meta_description_en;
        $item->meta_description_kk = $request->meta_description_kk;
        $item->open_graph_title_ru = $request->open_graph_title_ru;
        $item->open_graph_title_en = $request->open_graph_title_en;
        $item->open_graph_title_kk = $request->open_graph_title_kk;
        $item->open_graph_description_ru = $request->open_graph_description_ru;
        $item->open_graph_description_en = $request->open_graph_description_en;
        $item->open_graph_description_kk = $request->open_graph_description_kk;
        $item->avatar = $request->image;
        $item->is_published = $request->is_published;

        $item->save();

        $item->alias = Str::slug($item->id . '-' . $request->name_ru);
        $item->update(['alias' => Str::slug($item->id . '-' .$request->get("name_ru"))]);
        $item->alias = Str::slug($request->get("name_ru"));

        $item->authors()->sync($request->input('user_id'));

        $item->regions()->sync($request->input('region_id'));

        $logger = new Log;
        $logger->log("add", "section", $item->id, $item->name_ru);

        return redirect("/admin/section/" . $item->id)->with("status", "Новый раздел успешно добавлен");
    }

    public function edit(Section $item)
    {
        $sections = Section::where("id", "!=", $item->id)->orderBy("name_ru", "asc")->get();
        $responsible = User::all();
        $author = Section::with('authors')->get();
        $regions = Region::all();
        return view("admin.sections.view", [
            "item" => $item,
            "sections" => $sections,
            "responsible" => $responsible,
            "regions" => $regions
        ]);
//        return $responsible[0];
    }

    public function update(Request $request, Section $item)
    {
        $this->validate($request, [
            "name_ru" => "required|min:3|max:255",
            "alias" => "unique:articles,alias",
        ]);

        $item->name_ru = $request->name_ru;
        $item->name_kk = $request->name_kk;
        $item->name_en = $request->name_en;
        $item->annotation_ru = $request->annotation_ru;
        $item->annotation_kk = $request->annotation_kk;
        $item->annotation_en = $request->annotation_en;
        $item->description_ru = $request->description_ru;
        $item->description_kk = $request->description_kk;
        $item->description_en = $request->description_en;
        $item->meta_title_ru = $request->meta_title_ru;
        $item->meta_title_en = $request->meta_title_en;
        $item->meta_title_kk = $request->meta_title_kk;
        $item->meta_description_ru = $request->meta_description_ru;
        $item->meta_description_en = $request->meta_description_en;
        $item->meta_description_kk = $request->meta_description_kk;
        $item->open_graph_title_ru = $request->open_graph_title_ru;
        $item->open_graph_title_en = $request->open_graph_title_en;
        $item->open_graph_title_kk = $request->open_graph_title_kk;
        $item->open_graph_description_ru = $request->open_graph_description_ru;
        $item->open_graph_description_en = $request->open_graph_description_en;
        $item->open_graph_description_kk = $request->open_graph_description_kk;
        $item->avatar = $request->image;
        $item->is_published = $request->is_published;
        $alias = $request->get("alias", Str::slug($item->id . "-" . $request->get("name_ru")));
        $alias = $alias !== null ? $alias : Str::slug($item->id . "-" . $request->get("name_ru"));
        $item->alias = $alias;
        $item->is_published = $request->get("is_published");

        $item->save();
        $item->authors()->sync($request->input('user_id'));
        $item->regions()->sync($request->input('region_id'));

        $logger = new Log;
        $logger->log("edit", "section", $item->id, $item->name_ru);

        return redirect("/admin/section/" . $item->id)->with("status", "Данные о разделе успешно изменены");
    }

    public function delete(Section $item)
    {
        $item->delete();
        return redirect("/admin/sections/")->with("status", "Объект успешно удален");
    }
}
