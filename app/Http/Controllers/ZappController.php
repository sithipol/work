<?php

namespace App\Http\Controllers;

use App\ZappModel;
use XMLWriter;
use Illuminate\Http\Request;
use XmlParser;

class ZappController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $xw = new XMLWriter();
        // $xw->openURI('php://output');
        $xw->openMemory();
        $xw->startDocument("1.0", "utf-8");
        $xw->startElement("book");
        $xw->writeAttribute("id", "1");
        $xw->text("เทส");
        $xw->endElement();
        $xw->endDocument();
        file_put_contents('../public/ZappFile/xml2.xml', $xw->outputMemory());
        
        echo "<a href='http://127.0.0.1:8000/ZappFile/xml2.xml' download >sss</a>";
        // $xw->flush();
        // return htmlspecialchars($xw->outputMemory());
        // return view('Zapp.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //PDF file is stored under project/public/download/info.pdf
        $file = public_path() . "/download/info.xml";

        $headers = array(
            'Content-Type: application/xml',
        );

        return response()->download($file, 'filename.xml', $headers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
