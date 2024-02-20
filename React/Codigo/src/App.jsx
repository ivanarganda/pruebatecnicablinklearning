import './App.css'
import Frutas from './components/Frutas';

function App() {

  const frutas = [
    'Pera',
    'Mango',
    'Kiwi',
    'Platano',
    'Manzana'
  ];

  return (
    <div className='w-screen h-screen flex flex-row bg-gray-100 relative'>
      <Frutas frutas={frutas} />
    </div>
  )
}

export default App
