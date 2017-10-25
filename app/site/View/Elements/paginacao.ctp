   <div class="col-xs-12 col-sm-12 col-md-12 text-center paginacao">
     <?php
     echo $this->Paginator->prev('Anterior ' . __(' '), array('tag' => ''), '', array(
      'tag' => 'a',
      'class' => 'btn-prev disabled',
      'escape' => false
      ));
     echo $this->Paginator->numbers(array(
      'separator' => ' ',
      'tag' => 'span',
      'modulus' => '4',
      'currentTag' => 'a',
      'currentClass' => 'active',
      'first' => 0,
      'last' => 0,
      )
     );
     echo $this->Paginator->next(__(' ') . ' Próximo', array('tag' => ''), '', array(
      'tag' => 'a',
      'class' => 'btn-next disabled',
      'escape' => false
      ));
      ?>
    </div>
