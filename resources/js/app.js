import {Alpine, Livewire} from '../../vendor/livewire/livewire/dist/livewire.esm';
import focus from '@alpinejs/focus'
import './animations/animation';

Alpine.plugin(focus);

Livewire.start();
