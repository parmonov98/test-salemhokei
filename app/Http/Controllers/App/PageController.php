<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Album;
use App\Models\AlbumImage;
use App\Models\Article;
use App\Models\Region;
use App\Models\Section;
use App\Models\Text;
use App\Models\Video;
use Harimayco\Menu\Facades\Menu;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Helpers\EmailHelper;
use App\Models\Page;


class PageController extends Controller
{
    public function index(Request $request, $lang = "ru")
    {
        $articles = Article::orderBy("published_at", "desc")
            ->where("is_published", "=", 1);
        $articles = $articles->take(5)->get();

        $videos = Video::orderBy("published_at", "desc")
            ->where("is_published", "=", 1);
        $videos = $videos->take(5)->get();

        $albums = Album::orderBy("published_at", "desc")
            ->where("is_published", "=", 1);
        $albums = $albums->take(5)->get();

        return view("app.pages.home.index", [
            "items" => [],
            'lang' => $lang,
            'articles' => $articles,
            'videos' => $videos,
            'albums' => $albums
        ]);
    }

    public function about(Request $request, $lang = "ru")
    {
        return view("app.pages.about", [
            "items" => [],
            "lang" => $lang
        ]);
    }

    public function equipment(Request $request, $lang = "ru")
    {
        $textItems = Text::where('page', 'hockey')->get();
        return view("app.pages.equipment", [
            "items" => [],
            "textItems" => $textItems,
            "lang" => $lang
        ]);
    }
    public function hockey(Request $request, $lang = "ru")
    {
        $textItems = Text::with('video')->where('page', 'hockey')->get();
        return view("app.pages.hockey", [
            "items" => [],
            "textItems" => $textItems,
            "lang" => $lang
        ]);
    }

    public function schools(Request $request, $lang = "ru")
    {

        $regions = Region::all();
        $schools = Section::where("is_published", "=", 1)->with('regions')->paginate(6);
//        $schools = Section::where("is_published", "=", 1)->with('regions')->get();

        $type = $request->type;
        if (empty($type)) {
            $schools = [];
        } else {
            $schools = Section::where('is_published', '=', 1)->with('regions')->whereHas('regions', function ($query) use ($type) {
                $query->where('regions.id', '=', $type);
            })->paginate(6);
        }

        $textItems = Text::where('page', 'schools')->get();
//        dd($textItems);
//        dd(Menu::get('school'));
//        $schools = Menu::get('MyNavBar');
//        dd($schools);
        return view("app.pages.schools", [
            "schools" => $schools,
            "regions" => $regions,
            'textItems' => $textItems,
            "lang" => $lang
        ]);
    }

    public function school(Request $request, $lang = 'ru', $alias)
    {

        $item = Section::whereAlias($alias)
            ->with('regions')
            ->whereIsPublished(true)
            ->first();

        return view('app.pages.school', [
            'lang' => $lang,
            'item' => $item
        ]);
    }

    public function faq(Request $request, $lang = "ru")
    {
        $textItems = Text::with('video')->where('page', 'faq')->orderByDesc('id')->get();
        return view("app.pages.faq", [
            "lang" => $lang,
            'textItems' => $textItems
        ]);
    }

    public function for_parents(Request $request, $lang = "ru")
    {
//        dd($request->all());
//        $textItems = Text::with('video')->where('page', 'parents')->orderByDesc('id')->get();
//        dd($textItems);
//        dd($ParentsNavBar->roots());
        return view("app.pages.parents", [
            "lang" => $lang,
//            'textItems' => $textItems
        ]);
    }
    public function play(Request $request, $lang = "ru")
    {
        $textItems = Text::with('video')->where('page', 'play')->orderByDesc('id')->get();
        return view("app.pages.play", [
            "lang" => $lang,
            'textItems' => $textItems
        ]);
    }

    public function for_parents_training(Request $request, $lang = "ru")
    {
        return view("app.pages.for_parents_training", [
            "lang" => $lang
        ]);
    }

    public function for_parents_food(Request $request, $lang = "ru")
    {
        return view("app.pages.for_parents_food", [
            "lang" => $lang
        ]);
    }

    public function for_parents_psychology(Request $request, $lang = "ru")
    {
        return view("app.pages.for_parents_psychology", [
            "lang" => $lang
        ]);
    }

    public function article(Request $request, $lang = 'ru', $alias)
    {
        $item = Article::whereAlias($alias)
            ->whereIsPublished(true)
            ->first();

        return view('app.pages.article', [
            'lang' => $lang,
            'item' => $item
        ]);
    }

    public function news_articles(Request $request, $lang = 'ru')
    {
        $articles = Article::where("is_published", "=", 1)->paginate(9);

        return view('app.pages.news_articles', [
            'lang' => $lang,
            'articles' => $articles
        ]);
    }

    public function news_videos(Request $request, $lang = 'ru')
    {
        $videos = Video::where("is_published", "=", 1)->paginate(9);

        return view('app.pages.news_videos', [
            'lang' => $lang,
            'videos' => $videos
        ]);
    }

    public function news_albums(Request $request, $lang = 'ru')
    {
        $albums = Album::where("is_published", "=", 1)->paginate(9);

        return view('app.pages.news_albums', [
            'lang' => $lang,
            'albums' => $albums
        ]);
    }

    public function album(Request $request, $lang = 'ru')
    {
        $item = Album::where('id', '=', $request->id)
            ->whereIsPublished(true)
            ->first();
        $photos = AlbumImage::orderBy('id', 'desc')->with('album')->where('album_id', '=', $request->id)->get();

        return view('app.pages.album', [
            'lang' => $lang,
            'item' => $item,
            'photos' => $photos
        ]);
    }

    public function news(Request $request, $lang = 'ru')
    {
        $articles = Article::get();
        $albums = Album::get();
        $videos = Video::get();


        $items = collect($articles)->merge($albums)->merge($videos)->paginate(9);


        return view('app.pages.news', [
            'lang' => $lang,
            'items' => $items,
        ]);
    }

    public function contact_mail(Request $request, $lang = 'ru')
    {
        $emails = array(env('MAIL_USERNAME'));

        Mail::send('app.pages.emails.view', ['data' => $request], function ($m) use ($emails) {
            foreach ($emails as $email) {
                $m->from(env('MAIL_USERNAME'), 'Salem Hokei');
                $m->to($email, 'Receiver')->subject('Сообщение с сайта');
            }
        });

        return redirect()->back()->with('success', 'message send!');
    }

    public function record_to_school(Request $request, $lang = 'ru')
    {

        $emails = array($request->email);
//        dd($emails);
        $mailed = Mail::send('app.pages.emails.record_to_school', ['data' => $request], function ($m) use ($emails) {
            foreach ($emails as $email) {
                $m->from(env('MAIL_USERNAME'), 'Salem Hokei');
                $m->to($email, 'Receiver')->subject('Запись на пробное занятие');
            }
        });


        dd($mailed);
//        return redirect()->back()->with('success', 'message send!');
    }

    public function show(Request $request, $lang,  $alias)
    {
//         dd($alias);
        $item = Page::whereAlias($alias)->whereIsPublished(true)->orderBy("id", "desc")->first();
        // dd($item->accordion);
        if (!$item) {
            return abort(404);
        }

        return view("app.pages.page.default", [
            "item" => $item,
        ]);
    }

}
