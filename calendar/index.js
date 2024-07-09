let date = new Date();

const renderCalendar = () => {
  const viewYear = date.getFullYear();
  const viewMonth = date.getMonth();

  // 월을 두 자리 형식으로 변환
  const formattedMonth = String(viewMonth + 1).padStart(2, '0');

  document.querySelector('.year-month').textContent = ` ${formattedMonth}`;

  const prevLast = new Date(viewYear, viewMonth, 0);
  const thisLast = new Date(viewYear, viewMonth + 1, 0);

  const PLDate = prevLast.getDate();
  const PLDay = prevLast.getDay();

  const TLDate = thisLast.getDate();
  const TLDay = thisLast.getDay();

  const prevDates = [];
  const thisDates = [...Array(TLDate + 1).keys()].slice(1);
  const nextDates = [];

  if (PLDay !== 6) {
    for (let i = 0; i < PLDay + 1; i++) {
      prevDates.unshift(PLDate - i);
    }
  }

  for (let i = 1; i < 7 - TLDay; i++) {
    nextDates.push(i);
  }

  const dates = prevDates.concat(thisDates, nextDates);
  const firstDateIndex = dates.indexOf(1);
  const lastDateIndex = dates.lastIndexOf(TLDate);

  dates.forEach((date, i) => {
    const condition = i >= firstDateIndex && i < lastDateIndex + 1 ? 'this' : 'other';
    
    // 6월 17일에 blue-date 클래스 추가
    let dateClass = condition;
    if (viewYear === 2024 && viewMonth === 5 && date === 17 && condition === 'this') {
      dateClass += ' blue-date';
    }

    // 토요일과 일요일 클래스 추가
    const dayOfWeek = (i % 7);
    if (dayOfWeek === 0) {
      dateClass += ' sunday';
    } else if (dayOfWeek === 6) {
      dateClass += ' saturday';
    }

    dates[i] = `<div class="date"><span class="${dateClass}">${date}</span></div>`;
  });

  document.querySelector('.dates').innerHTML = dates.join('');

  const today = new Date();
  if (viewMonth === today.getMonth() && viewYear === today.getFullYear()) {
    for (let date of document.querySelectorAll('.this')) {
      if (+date.innerText === today.getDate()) {
        date.classList.add('today');
        break;
      }
    }
  }
};

renderCalendar();

const prevMonth = () => {
  date.setDate(1);
  date.setMonth(date.getMonth() - 1);
  renderCalendar();
};

const nextMonth = () => {
  date.setDate(1);
  date.setMonth(date.getMonth() + 1);
  renderCalendar();
};

const goToday = () => {
  date = new Date();
  renderCalendar();
};
