<?php

namespace CodePub\Http\Controllers;


use CodePub\Repositories\BookRepository;
use Illuminate\Http\Request;


class BooksTrashedController extends Controller
{
    /**
     * @var BookRepository
     */
    private $repository;

    public function __construct(BookRepository $repository)
    {

        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->get('search');
        $books = $this->repository->onlyTrashed()->paginate(10);
        return view('trashed.books.index', compact('books', 'search'));
    }

}
