import { MapContainer, Marker, TileLayer, Tooltip } from "react-leaflet";
import "leaflet/dist/leaflet.css";
import "leaflet-defaulticon-compatibility";
import "leaflet-defaulticon-compatibility/dist/leaflet-defaulticon-compatibility.css";

export default function Map() {
  const center = [52.505, -0.09];
  const zoomLevel = 13;
  return (
    <MapContainer center={center} zoom={zoomLevel} scrollWheelZoom={true} className='w-full h-80'>
      <TileLayer
        attribution='&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        url="https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png"
      />
      <Marker position={center}>
        <Tooltip>Je suis ici</Tooltip>
      </Marker>
    </MapContainer>
  )
}