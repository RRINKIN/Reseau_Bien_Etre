import { Inter } from 'next/font/google';
import './globals.css';
import HeaderMenu from './components/global/headerMenu';
import Footer from './components/global/footer';
//import Logo from './components/global/logo';
//import Navigation from './components/global/navigation/navigation';
//import BurgerMenu from './components/global/burgerMenu';

  
const inter = Inter({ subsets: ['latin'] })

export const metadata = {
  title: 'Reseau bien être',
  description: 'Generated by create next app',
}

function RootLayout({ children }) {
  return (
    <html lang="en">
      <body className='{inter.className} font-sans text-base'>
        <header>
          <nav>
            <HeaderMenu />
          </nav>
        </header>
        <main className='bg-white text-zinc-500 p-0'>
          {children}
        </main>
        <footer>
          <Footer />
        </footer>
      </body>
    </html>
  )
}
export default RootLayout;
