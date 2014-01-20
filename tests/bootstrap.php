<?php


// Adapters
include_once("./src/phayes/GeoPHP/Adapter/GeoAdapter.php"); // Abtract
include_once("./src/phayes/GeoPHP/Adapter/GeoJSON.php");
include_once("./src/phayes/GeoPHP/Adapter/WKT.php");
include_once("./src/phayes/GeoPHP/Adapter/EWKT.php");
include_once("./src/phayes/GeoPHP/Adapter/WKB.php");
include_once("./src/phayes/GeoPHP/Adapter/EWKB.php");
include_once("./src/phayes/GeoPHP/Adapter/KML.php");
include_once("./src/phayes/GeoPHP/Adapter/GPX.php");
include_once("./src/phayes/GeoPHP/Adapter/GeoRSS.php");
include_once("./src/phayes/GeoPHP/Adapter/GoogleGeocode.php");
include_once("./src/phayes/GeoPHP/Adapter/GeoHash.php");

// Geometries
include_once("./src/phayes/GeoPHP/Geometry/Geometry.php"); // Abtract
include_once("./src/phayes/GeoPHP/Geometry/Point.php");
include_once("./src/phayes/GeoPHP/Geometry/Collection.php"); // Abtract
include_once("./src/phayes/GeoPHP/Geometry/LineString.php");
include_once("./src/phayes/GeoPHP/Geometry/MultiPoint.php");
include_once("./src/phayes/GeoPHP/Geometry/Polygon.php");
include_once("./src/phayes/GeoPHP/Geometry/MultiLineString.php");
include_once("./src/phayes/GeoPHP/Geometry/MultiPolygon.php");
include_once("./src/phayes/GeoPHP/Geometry/GeometryCollection.php");