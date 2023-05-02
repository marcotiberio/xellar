import Swiper, { Navigation, A11y, Autoplay } from 'swiper'
import 'swiper/css/bundle'
import { buildRefs, getJSON } from '@/assets/scripts/helpers.js'

export default function (sliderImages) {
  const refs = buildRefs(sliderImages)
  const data = getJSON(sliderImages)
  const swiper = initSlider(refs, data)
  return () => swiper.destroy()
}

function initSlider (refs, data) {
  const { options } = data
  const config = {
    modules: [Navigation, A11y, Autoplay],
    a11y: options.a11y,
    roundLengths: true,
    slidesPerView: 3,
    spaceBetween: 30,
    breakpoints: {
      '@0.00': {
        slidesPerView: 1,
        spaceBetween: 10
      },
      '@0.75': {
        slidesPerView: 2,
        spaceBetween: 20
      },
      '@1.00': {
        slidesPerView: 3,
        spaceBetween: 40
      },
      '@1.50': {
        slidesPerView: 3,
        spaceBetween: 50
      }
    },
    navigation: {
      nextEl: refs.next,
      prevEl: refs.prev
    }
  }
  if (options.autoplay && options.autoplaySpeed) {
    config.autoplay = {
      delay: options.autoplaySpeed
    }
  }

  return new Swiper(refs.slider, config)
}
