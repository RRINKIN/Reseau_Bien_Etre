import { MapContainer, Marker, TileLayer, Tooltip } from "react-leaflet";
import "leaflet/dist/leaflet.css";
import "leaflet-defaulticon-compatibility";
import "leaflet-defaulticon-compatibility/dist/leaflet-defaulticon-compatibility.css";
import { useEffect, useState } from "react";

export default function Map({location}) {

  const localite = {location};
  const [coord, setCoord] = useState([51.509865, -0.118092]);
  
  useEffect(() => {
    const coordinates = fetch(`https://nominatim.openstreetmap.org/search?q=${localite}&format=json&polygon_kml=1`)
    .then(response => {
      return response.json();
    })
    .then(response => {
      setCoord([response[0].lat, response[0].lon]);
    })
  }, []);
  const zoomLevel = 2;

  return (
    <MapContainer 
      center={coord} 
      zoom={zoomLevel} 
      scrollWheelZoom={true} 
      className='w-full h-80'
    >
      <TileLayer
        attribution='&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        url="https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png"
      />
      <Marker position={coord}>
        <Tooltip>Je suis ici: {location}</Tooltip>
      </Marker>
    </MapContainer>
  )
}