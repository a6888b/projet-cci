{extends file='base/layout.tpl'}
{block name=content}
  {foreach from=$avis item=item key=key}
    <h2>{$key}</h2>
    {for $foo=0 to count($item)-1}
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{base_url('assets/avis')|cat:$item[$foo]->avis_nomphoto}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{$item[$foo]->avis_titre}</h5>
          <p class="card-text">{$item[$foo]->avis_cont}</p>
        </div>
        <div class="card-body">
          <a href="{base_url('hotel')|cat:'/'|cat:$item[$foo]->hotel_nom}" class="card-link btn">Voir l'hôtel</a>
          <a href="#" class="card-link">Mettre un petit champs</a>
        </div>
    </div>
    {/for}
  {/foreach}
{/block}