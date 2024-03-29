<div class="popup" data-open="delete_Hall">
    <div class="popup__container">
        <div class="popup__content">
            <div class="popup__header">
                <h2 class="popup__title">
                    Удаление зала
                    <a class="popup__dismiss" href="#"><img src="img/admin/close.png" alt="Закрыть" data-close="close"></a>
                </h2>

            </div>
            <div class="popup__wrapper">
                <form action="{{ route('hall.destroy', $hall->id) }}" method="post" accept-charset="utf-8">
                    @csrf
                    @method('DELETE')
                    <p class="conf-step__paragraph">Вы действительно хотите удалить зал <span></span>?</p>
                    <!-- В span будет подставляться название зала -->
                    <div class="conf-step__buttons text-center">
                        <input type="submit" value="Удалить" class="conf-step__button conf-step__button-accent">
                        <button class="conf-step__button conf-step__button-regular" data-close="close">Отменить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
