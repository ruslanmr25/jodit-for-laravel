<?php

namespace Do6po\LaravelJodit\Http\Resources;

use Do6po\LaravelJodit\Dto\FolderDto;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property FolderDto resource
 */
class DirectoryResource extends JsonResource
{
    /**
     * @param Request $request
     * @return array
     */
    public function toArray($request): array
    {



        // $jayParsedAry = [
        //     "success" => true,
        //     "time" => "2024-07-24 06:12:33",
        //     "data" => [
        //         "sources" => [
        //             [
        //                 // "name" => "default",
        //                 "baseurl" => "https://xdsoft.net/jodit/finder/files/",
        //                 "path" => "subfolder/",
        //                 "files" => [
        //                     [
        //                         "file" => "pexels-garvin-st-villier-3972755.jpg",
        //                         "name" => "pexels-garvin-st-villier-3972755.jpg",
        //                         "type" => "image",
        //                         "thumb" => "_thumbs/pexels-garvin-st-villier-3972755.jpg",
        //                         "changed" => "07/24/2024 6:00 AM",
        //                         "size" => "482.30kB",
        //                         "isImage" => true
        //                     ],
        //                     [
        //                         "file" => "pexels-elina-sazonova-4130211.jpeg",
        //                         "name" => "pexels-elina-sazonova-4130211.jpeg",
        //                         "type" => "image",
        //                         "thumb" => "_thumbs/pexels-elina-sazonova-4130211.jpeg",
        //                         "changed" => "07/24/2024 6:00 AM",
        //                         "size" => "279.17kB",
        //                         "isImage" => true
        //                     ],
        //                     [
        //                         "file" => "pexels-darwis-alwan-1995730.jpeg",
        //                         "name" => "pexels-darwis-alwan-1995730.jpeg",
        //                         "type" => "image",
        //                         "thumb" => "_thumbs/pexels-darwis-alwan-1995730.jpeg",
        //                         "changed" => "07/24/2024 6:00 AM",
        //                         "size" => "685.35kB",
        //                         "isImage" => true
        //                     ],
        //                     [
        //                         "file" => "pexels-burst-374825.jpeg",
        //                         "name" => "pexels-burst-374825.jpeg",
        //                         "type" => "image",
        //                         "thumb" => "_thumbs/pexels-burst-374825.jpeg",
        //                         "changed" => "07/24/2024 6:00 AM",
        //                         "size" => "155.91kB",
        //                         "isImage" => true
        //                     ],
        //                     [
        //                         "file" => "pexels-brandon-2867826.jpg",
        //                         "name" => "pexels-brandon-2867826.jpg",
        //                         "type" => "image",
        //                         "thumb" => "_thumbs/pexels-brandon-2867826.jpg",
        //                         "changed" => "07/24/2024 6:00 AM",
        //                         "size" => "859.78kB",
        //                         "isImage" => true
        //                     ]
        //                 ]
        //             ]
        //         ],
        //         "code" => 220
        //     ],
        //     "elapsedTime" => 0
        // ];

        // return $jayParsedAry;


        $folder = $this->resource;

        return [
            'success' => true,
            'time' => now(),
            'code' => 220,
            'data' => [
                'sources' => [
                    $folder->toArray(),
                ],
            ],
        ];
    }
}
